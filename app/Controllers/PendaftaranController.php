<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PendaftaranController extends BaseController
{
    public function submit()
    {
        $model = new PendaftaranModel();
        $file = $this->request->getFile("gambar");

        if (!$file->isValid()) {
            return "Upload tidak valid!";
        }

        $valid = $this->validate([
            'gambar' => [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/png,application/pdf]',
                'max_size[gambar,5024]'
            ]
        ]);

        if (!$valid) {
            return "Upload gagal! Format harus jpg/png/jpeg/pdf, min 1kb.";
        }

        $namaFile = $file->getRandomName();
        $file->move("Dokumen", $namaFile);

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'hp' => $this->request->getPost('hp'),
            'email' => $this->request->getPost('email'),
            'nominal' => $this->request->getPost('nominal'),
            'bank' => $this->request->getPost('bank'),
            'anbank' => $this->request->getPost('anbank'),
            'gambar' => $namaFile,
            'tanggal_transfer' => $this->request->getPost('tanggal_transfer'),
            'IPaddress' => $_SERVER['REMOTE_ADDR'],
        ];

        $model->save($data);

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "rizqyazhar004@ubs.ac.id";
        $mail->Password = "qzxuqodbptouqvgs";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom("rizqyazhar004@ubs.ac.id", "Pendaftaran Online");
        $mail->addAddress($this->request->getPost("email"));
        $mail->addReplyTo("rizqyazhar004@ubs.ac.id", "Information");
        // $mail->addCC("kresnomurtiprabowo1991@gmail.com", "information");

        $mail->isHTML(true);
        $mail->Subject = "Pendaftaran Online";
        $mail->Body = $mail->isHTML(isHtml: true);

        $mail->Body = '
                        <div style="font-family: Arial, sans-serif; background:#f5f7fa; padding:30px;">

                            <div style="
                                max-width:600px;
                                margin:0 auto;
                                background:white;
                                border-radius:12px;
                                padding:25px 35px;
                                box-shadow:0 4px 10px rgba(0,0,0,0.06);
                            ">
                                
                                <h2 style="color:#1a73e8; margin-top:0; text-align:center;">
                                    Konfirmasi Pendaftaran Online
                                </h2>
                                <p style="color:#555; text-align:center; margin-bottom:25px;">
                                    Terima kasih telah melakukan pendaftaran melalui sistem kami.
                                </p>

                                <h3 style="margin-bottom:10px;">Dikerjakan oleh Mahasiswa</h3>

                                <div style="background:#e8f0fe; padding:12px 15px; border-radius:8px; margin-bottom:25px;">
                                    <p style="margin:5px 0;"><b>Nama:</b> Rizqy Azhar Hibatullah</p>
                                    <p style="margin:5px 0;"><b>NPM:</b> 2301111110004</p>
                                    <p style="margin:5px 0;"><b>Kelas:</b> TI5AM</p>
                                </div>

                                <h3 style="margin-bottom:10px;">Detail Pendaftaran</h3>

                                <table style="width:100%; border-collapse:collapse; margin-bottom:25px;">
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Nama</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $this->request->getPost("nama") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Email</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $this->request->getPost("email") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Nominal Transfer</td>
                                        <td style="padding:10px; border:1px solid #ddd;">Rp ' . $this->request->getPost("nominal") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Bank</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $this->request->getPost("bank") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Atas Nama</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $this->request->getPost("anbank") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Tanggal Transfer</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $this->request->getPost("tanggal_transfer") . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px; border:1px solid #ddd; background:#fafafa;">Bukti Transfer</td>
                                        <td style="padding:10px; border:1px solid #ddd;">' . $namaFile . '</td>
                                    </tr>
                                </table>

                                <p style="color:#333; margin-bottom:20px;">
                                    Data Anda telah berhasil kami terima. 
                                </p>

                                <hr style="border:none; border-top:1px solid #ddd; margin:20px 0;">

                                <p style="color:#888; font-size:12px; text-align:center;">
                                    Email ini dikirim otomatis oleh Sistem Pendaftaran Online.<br>
                                    © ' . date("Y") . ' — All Rights Reserved.
                                </p>
                            </div>
                        </div>';


        if (!$mail->send()) {
            return "Email gagal dikirim!";
        }

        return redirect()->to('/')->with('success', 'Pendaftaran berhasil!');
    }
}