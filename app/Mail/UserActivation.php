<?php

namespace App\Mail;

use App\Models\Useradmin;
use Crypt;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class UserActivation extends Mailable
{
    use Queueable, SerializesModels;

    public $useradmin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Useradmin $useradmin)
    {
        $this->useradmin = $useradmin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->from('fherycobains@gmail.com')
    //     ->view('adminsekolah.emails.verify')
    //     ->with(
    //      [
    //          'nama' => 'skolin',
    //          'website' => 'skolin.id',
    //      ]);
    // }
    // public function build()
    // {
    //     $encrypt = Crypt::encrypt($this->useradmin->email);
        
    //     $link = route('admin-sekolah.verify', ['token' => $encrypt]);

    //     return $this->subject('Verify your email address')->with('link', $link)->view('adminsekolah.emails.verify');
    // }
    public function build()
    {
        $useradmin = Crypt::encrypt($this->useradmin->email);
        // $link = route('admin-sekolah.register.verify', ['token' => $useradmin]);
        // return $this->subject('Verify your email address')
        //             ->view('adminsekolah.emails.verify')
        //             ->with(
        //                 [
        //                     'website' => 'skolin.id',
        //                     'line' => 'Click the button below to verify your email address.',
        //                     'name' => 'Skolin.id ! Verify email address',
        //                     'link' => $link
        //                 ]
        //             );
        $link = route('admin-sekolah.register.verify', ['token' => $useradmin]);

        return $this->subject('Verify Your Email Address')
                ->view('adminsekolah.emails.verify')
                    ->with(
                        [
                            'website' => 'skolin.id',
                            'line' => 'Click the button below to verify your email address.',
                            'name' => 'Skolin.id ! Verify email address',
                            'link' => $link
                        ]
                    );
    }
}
