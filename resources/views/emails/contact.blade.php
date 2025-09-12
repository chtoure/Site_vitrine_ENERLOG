<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body, table, td, p, a, li, blockquote {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #f4f4f4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }

        .header {
            background: linear-gradient(135deg, #312782 0%, #312782 100%);
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header .icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255,255,255,0.2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .content {
            padding: 40px 30px;
        }

        .message-card {
            background-color: #f8f9fa;
            border-left: 4px solid #312782;
            padding: 25px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }

        .field-group {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e9ecef;
        }

        .field-group:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .field-label {
            font-weight: 600;
            color: #495057;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: block;
        }

        .field-value {
            color: #212529;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }

        .email-link {
            text-decoration: none;
            font-weight: 500;
        }

        .email-link:hover {
            text-decoration: underline;
        }

        .message-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .footer p {
            margin: 0;
            color: #6c757d;
            font-size: 14px;
        }

        .timestamp {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
        }

        .timestamp p {
            margin: 0;
            color: #1565c0;
            font-size: 14px;
            font-weight: 500;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            
            .header, .content, .footer {
                padding: 20px !important;
            }
            
            .header h1 {
                font-size: 24px !important;
            }
            
            .message-card {
                padding: 20px !important;
                margin: 20px 0 !important;
            }
        }
    </style>
</head>
<body>
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <td>
                <div class="email-container">
                    <div class="header">
                        <div class="icon">
                            📧
                        </div>
                        <h1>Nouveau Message de Contact</h1>
                    </div>

                    <div class="content">
                        <div class="message-card">
                            <div class="field-group">
                                <span class="field-label">Nom du contact</span>
                                <p class="field-value">{{ $name }}</p>
                            </div>

                            <div class="field-group">
                                <span class="field-label">Adresse email</span>
                                <p class="field-value">
                                    <a href="mailto:{{ $email }}" class="email-link">{{ $email }}</a>
                                </p>
                            </div>

                            <div class="field-group">
                                <span class="field-label">Message</span>
                                <div class="message-content">{{ $messageContent }}</div>
                            </div>
                        </div>

                        <div class="timestamp">
                            <p>📅 Reçu le {{ now()->format('d/m/Y à H:i') }}</p>
                        </div>
                    </div>

                    <div class="footer">
                        <p>Ce message a été envoyé depuis le formulaire de contact de votre site web.</p>
                        <p style="margin-top: 10px; font-size: 12px;">
                            © {{ date('Y') }} {{ config('app.name', 'Votre Site') }}. Tous droits réservés.
                        </p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
