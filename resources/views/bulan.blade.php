@extends('layout.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Rekap</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pendapatan Perbulan</a></li>
        </ol>
    </div>
</div>
<div class="content-body">
    <div class="container-fluid mt-3 ml-4">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pendapatan/Perbulan</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Motor</th>
                                        <th>Mobil</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                </tbody>
                            </table>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end" id="pagination">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Data dummy
    const data = [
        { no: 1, tanggal: "Oct 16, 2024", motor: 20, mobil: 10, total: 110000 },
        { no: 2, tanggal: "Oct 17, 2024", motor: 10, mobil: 20, total: 130000 },
        { no: 3, tanggal: "Oct 18, 2024", motor: 15, mobil: 10, total: 100000 },
        { no: 4, tanggal: "Oct 19, 2024", motor: 20, mobil: 15, total: 125000 },
        { no: 5, tanggal: "Oct 20, 2024", motor: 25, mobil: 20, total: 150000 },
        { no: 6, tanggal: "Oct 21, 2024", motor: 10, mobil: 10, total: 90000 },
        { no: 7, tanggal: "Oct 22, 2024", motor: 12, mobil: 14, total: 95000 },
    ];

    const rowsPerPage = 5;
    let currentPage = 1;

    // Function to render table rows
    function renderTable(page) {
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const tableBody = document.getElementById("table-body");
        tableBody.innerHTML = "";

        const paginatedData = data.slice(start, end);
        paginatedData.forEach((item) => {
            const row = `
                <tr>
                    <td>${item.no}</td>
                    <td><span class="text-muted">${item.tanggal}</span></td>
                    <td><span class="label gradient-1 rounded">${item.motor}</span></td>
                    <td><span class="label gradient-1 rounded">${item.mobil}</span></td>
                    <td>Rp. ${item.total.toLocaleString()}</td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    }

    // Function to render pagination
    function renderPagination() {
        const pageCount = Math.ceil(data.length / rowsPerPage);
        const pagination = document.getElementById("pagination");
        pagination.innerHTML = "";

        // Previous button
        const prevClass = currentPage === 1 ? "disabled" : "";
        pagination.innerHTML += `
            <li class="page-item ${prevClass}">
                <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
            </li>
        `;

        // Page numbers
        for (let i = 1; i <= pageCount; i++) {
            const activeClass = i === currentPage ? "active" : "";
            pagination.innerHTML += `
                <li class="page-item ${activeClass}">
                    <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                </li>
            `;
        }

        // Next button
        const nextClass = currentPage === pageCount ? "disabled" : "";
        pagination.innerHTML += `
            <li class="page-item ${nextClass}">
                <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
            </li>
        `;
    }

    // Function to change page
    function changePage(page) {
        const pageCount = Math.ceil(data.length / rowsPerPage);
        if (page < 1 || page > pageCount) return;

        currentPage = page;
        renderTable(page);
        renderPagination();
    }

    // Initial render
    renderTable(currentPage);
    renderPagination();
</script>
@endsection
