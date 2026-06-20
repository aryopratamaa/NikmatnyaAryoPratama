<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Tipe Partner</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10pt; color: #333; margin: 0; padding: 0; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h1 { margin: 0; color: #696cff; font-size: 24px; letter-spacing: 2px; text-transform: uppercase; }
        .header p { margin: 5px 0 0 0; color: #777; font-size: 11pt; }
        .divider { border: 0; border-top: 2px solid #696cff; margin: 15px 0 20px 0; }
        .report-title { text-align: center; text-transform: uppercase; font-size: 12pt; margin-bottom: 20px; color: #444; font-weight: bold; }
        
        table.modern-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table.modern-table thead th { background-color: #696cff; color: #fff; padding: 10px; text-align: left; font-size: 10pt; text-transform: uppercase; border: 1px solid #696cff; }
        table.modern-table tbody td { padding: 10px; border: 1px solid #e0e0e0; font-size: 10pt; vertical-align: top; color: #555; }
        table.modern-table tbody tr:nth-child(even) { background-color: #f8f9fa; }
        table.modern-table .text-center { text-align: center; }
        
        .signature-table { width: 100%; border: none; margin-top: 50px; }
        .signature-table td { border: none; padding: 0; }
        .signature-text { margin: 0; color: #333; line-height: 1.5; }
        .signature-line { border-bottom: 1px solid #333; width: 80%; margin-top: 60px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nikmat Rasanyo!</h1>
        <p>Komunitas Food and Beverage (FnB)</p>
    </div>
    
    <hr class="divider">
    <div class="report-title">Laporan Data Tipe Partner Usaha</div>

    <table class="modern-table">
        <thead>
            <tr>
                <th width="8%" class="text-center">No</th>
                <th width="32%">Tipe Partner</th>
                <th width="60%">Deskripsi Operasional</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $index => $item)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td><strong>{{ $item->tipe }}</strong></td>
                <td>{{ $item->deskripsi ?? 'Tidak ada deskripsi' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center" style="padding: 20px;">Belum ada data Tipe Partner.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <table class="signature-table">
        <tr>
            <td width="65%"></td>
            <td width="35%" style="text-align: left;">
                <p class="signature-text">Medan, {{ \Carbon\Carbon::now()->format('d F Y') }}</p>
                <p class="signature-text">Admin Sistem,</p>
                <div class="signature-line"></div>
            </td>
        </tr>
    </table>
</body>
</html>