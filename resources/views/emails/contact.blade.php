<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="background: #f4f6f8; font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 40px auto; background: #fff; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); padding: 32px;">
        <div style="text-align: center; margin-bottom: 24px;">
            <img src="https://images.icon-icons.com/1826/PNG/512/4202011emailgmaillogomailsocialsocialmedia-115677_115624.png" alt="Eco Creations" style="width: 80px; margin-bottom: 8px;">
            <h2 style="color: #2d3e50; margin: 0;">Nuevo mensaje de contacto</h2>
        </div>
        <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
            <tr>
                <td style="padding: 8px 0; color: #555;"><strong>Nombre:</strong></td>
                <td style="padding: 8px 0;">{{ $nombre }} {{ $apellidos }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #555;"><strong>Correo:</strong></td>
                <td style="padding: 8px 0;">{{ $correo }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #555;"><strong>Asunto:</strong></td>
                <td style="padding: 8px 0;">{{ $asunto }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #555;"><strong>Razón Social:</strong></td>
                <td style="padding: 8px 0;">{{ $razon_social ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #555;"><strong>RUC:</strong></td>
                <td style="padding: 8px 0;">{{ $ruc ?? '-' }}</td>
            </tr>
        </table>
        <div style="margin-top: 32px; text-align: center; color: #888; font-size: 14px;">
            Eco Creations &copy; {{ date('Y') }}
        </div>
    </div>
</body>
</html>