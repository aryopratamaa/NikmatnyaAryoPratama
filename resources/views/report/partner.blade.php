<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Daftar Partners</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; color: #000; }
        .text-center { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; text-align: center; font-weight: bold; }
        .ttd { width: 100%; border: none; margin-top: 50px; }
        .ttd td { border: none; padding: 0; }
    </style>
</head>
<body>
    <div class="text-center">
        <h2 style="margin-bottom: 5px; letter-spacing: 2px;">NIKMAT RASANYO!</h2>
        <p style="margin-top: 0; font-size: 14px;">Komunitas Food and Beverage (FnB)</p>
        <hr style="border: 1px solid #000; margin-bottom: 20px;">
        <h3 style="text-decoration: underline;">LAPORAN DAFTAR PARTNER DAN USER</h3>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="25%">Nama Usaha</th>
                <th width="30%">Alamat</th>
                <th width="25%">Email Akun</th>
                <th width="15%">Role</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $index => $item)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td><strong>{{ $item->partner->namausaha ?? 'Tidak Diketahui' }}</strong></td>
                <td>{{ $item->partner->alamat ?? '-' }}</td>
                <td>{{ $item->email }}</td>
                <td class="text-center" style="text-transform: uppercase;">{{ $item->role }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data Partner.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <table class="ttd">
        <tr>
            <td width="65%"></td>
            <td width="35%" class="text-left">
                <p>Medan, {{ \Carbon\Carbon::now()->format('d F Y') }}<br>Admin Sistem,</p>
                <br><br><br>
                <p style="text-decoration: underline; font-weight: bold;">_________________________</p>
            </td>
        </tr>
    </table>
</body>
</html>