@extends('mantis')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.semanticui.css">


    <style>
        .table-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
            border: 1px solid #e5e7eb;
            padding: 24px 24px 16px;
            margin-top: 16px;
            width: 100%;
        }

        .table-card-header {
            margin-bottom: 20px;
        }

        .table-card-header .title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .table-card-header .subtitle {
            font-size: 13px;
            color: #6b7280;
        }

        .app-footer {
            margin-top: auto; /* membuat footer turun ke bawah */
            padding: 16px 0;
            font-size: 13px;
            color: #6b7280;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #e5e7eb;
            background: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="table-card">
        <div class="table-card-header">
            <div class="title">Monitoring Asupan Natrium</div>
            <div class="subtitle">
                Catatan harian jumlah <code>natrium</code> yang masuk ke tubuh.
            </div>
        </div>

        <table id="example" class="ui celled table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Makanan</th>
                    <th>Natrium</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Adib</td>
                    <td>asdasd</td>
                    <td>Bandung</td>
                    <td>asudga</td>
                    <td>sadgasud</td>
                </tr>
                <tr>
                    <td>Rina</td>
                    <td>asdbasd</td>
                    <td>Jakarta</td>
                    <td>sdaashd</td>
                    <td>asdhioas</td>
                </tr>
                                <tr>
                    <td>Adib</td>
                    <td>asdasd</td>
                    <td>Bandung</td>
                    <td>asudga</td>
                    <td>sadgasud</td>
                </tr>
                <tr>
                    <td>Rina</td>
                    <td>asdbasd</td>
                    <td>Jakarta</td>
                    <td>sdaashd</td>
                    <td>asdhioas</td>
                </tr>
                                <tr>
                    <td>Adib</td>
                    <td>asdasd</td>
                    <td>Bandung</td>
                    <td>asudga</td>
                    <td>sadgasud</td>
                </tr>
                <tr>
                    <td>Rina</td>
                    <td>asdbasd</td>
                    <td>Jakarta</td>
                    <td>sdaashd</td>
                    <td>asdhioas</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="app-footer">
    <span>© 2025 TensiCare. Semua Hak Dilindungi</span>
</footer>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.semanticui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
@endsection
