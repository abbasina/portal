<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cryptommer\Smsir\Classes\Smsir;



class Token extends Model
{
    
    const EXPIRATION_TIME = 15; // minutes
    protected $fillable = [
        'code',
        'user_id',
        'used'
    ];
    public function __construct(array $attributes = [])
    {
        if (! isset($attributes['code'])) {
            $attributes['code'] = $this->generateCode();
        }
        parent::__construct($attributes);
    }
    /**
     * Generate a six digits code
     *
     * @param int $codeLength
     * @return string
     */
    public function generateCode($codeLength = 5)
    {
        $max = pow(10, $codeLength);
        $min = $max / 10 - 1;
        $code = mt_rand($min, $max);
        return $code;
    }
    /**
     * User tokens relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * True if the token is not used nor expired
     *
     * @return bool
     */
    public function isValid()
    {
        
        return !$this->isUsed() && !$this->isExpired();
    }
    /**
     * Is the current token used
     *
     * @return bool
     */
    public function isUsed()
    {
        
        
        
        return $this->used;
        
    }
    /**
     * Is the current token expired
     *
     * @return bool
     */
    public function isExpired()
    {
        
        return $this->created_at->diffInMinutes(Carbon::now()) > static::EXPIRATION_TIME;
    }
    public function canSend()
    {
        return $this->created_at->diffInMinutes(Carbon::now()) > static::EXPIRATION_TIME;
    }
    public function sendCode()
    {
        if (! $this->user) {
            throw new \Exception("کاربری با این کد یکبار مصرف پیدا نشد.");
        }
        if (! $this->code) {
            $this->code = $this->generateCode();
        }
        try {
            $parameter = new \Cryptommer\Smsir\Objects\Parameters("code", $this->code);
            $parameters = array($parameter);
        
            $template_id=375568;

            $mobile=$this->user->phone;
            //$this->Verify($mobile,$template_id,$parameters);

        } catch (\Exception $ex) {
            
            return false; //enable to send SMS
        }
        return true;
    }




    public function Verify(string $mobile, int $template_id, array $parameters) {
        $send = new Smsir();
        $sendverify=$send->Send();
        $sendverify->Verify($mobile, $template_id, $parameters);

    }
    

}
