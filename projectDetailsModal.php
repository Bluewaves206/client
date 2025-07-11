<!-- Modal -->
<div class="modal fade" id="projectDetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="projectDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="projectDetailsModalLabel">Project Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="projectDetailsRow row">
                    <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="insideLeftProject">
                            <div class="projectModalUpper">
                                <div class="projectName">
                                    <h2>J.K Chandra Website Redesign</h2>
                                </div>
                                <div class="projectStatus">
                                    <button>Active</button>
                                </div>
                            </div>
                            <div class="projectUnderAllDetails">
                                <div class="projectClientName">
                                    <h6><span>Client Name: </span> J.K Chandra Jewellry</h6>
                                </div>
                                <div class="projectContactTeamLead">
                                    <div class="projectContact">
                                        <h6><span>Contact No : </span>+91-7985641230</h6>
                                    </div>
                                    <div class="projectTeamLead">
                                        <h6>Team Lead: </h6>
                                        <div class="teamLeadImg">
                                            <img src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="teamLeaderImage">
                                        </div>
                                        <div class="teamLeadName">
                                            <span>Pritam Halder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projectProgress">
                                <div class="projectProgressHeading">
                                    <span class="cmnProjectHeading">Progress</span>
                                    <span class="progressPercentage">70%</span>
                                </div>
                                <div class="projectProgressBar">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 25%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="projectDescription">
                                <div class="projectDescriptionHeading">
                                    <span class="cmnProjectHeading">Descriptions</span>
                                </div>
                                <div class="projectDescriptionContent">
                                    <p>Designed and developed a tailored CRM solution for a multi-specialty hospital to
                                        streamline patient data management, appointment scheduling, billing, and
                                        follow-up interactions. </p>
                                </div>
                            </div>
                            <div class="projectTickets">
                                <div class="projectTicketHeading">
                                    <span class="cmnProjectHeading">Tickets</span>
                                    <button class="addNewTicket"><i class="ti ti-plus"></i>Add Ticket</button>
                                </div>
                                <div class="mainProjectTicketTable">
                                    <table class="table" id="projectTicketTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Database Creation</td>
                                                <td>12/05/2025 | 10.30 A.M</td>
                                                <td><button class="projectStausComplete cmnStatusBtn">Completed</button>
                                                </td>
                                                <td>
                                                    <i class="ti ti-eye viewProjectBtn"></i>
                                                    <i class="ti ti-trash deleteProjectBtn"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Database Creation</td>
                                                <td>12/05/2025 | 10.30 A.M</td>
                                                <td><button class="projectStausPending cmnStatusBtn">Pending</button>
                                                </td>
                                                <td>
                                                    <i class="ti ti-eye viewProjectBtn"></i>
                                                    <i class="ti ti-trash deleteProjectBtn"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Database Creation</td>
                                                <td>12/05/2025 | 10.30 A.M</td>
                                                <td><button class="projectStausComplete cmnStatusBtn">Completed</button>
                                                </td>
                                                <td>
                                                    <i class="ti ti-eye viewProjectBtn"></i>
                                                    <i class="ti ti-trash deleteProjectBtn"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="insideRightProject">
                            <div class="projectChartHeading">
                                <h3>Project Chart</h3>
                            </div>
                            <div id="projectDetailsCharts" id="projectDetailsCharts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

    var options = {
        series: [70, 30], // Values for Work Done (70%) and In Progress (30%)
        chart: {
            type: 'donut',
        },
        labels: ['Work Done', 'In Progress'], // Labels for the series
        colors: ['#00BBFF', '#005DFF'], // Colors for Work Done and In Progress
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val + "%"; // Display values as percentages
            }
        },
        legend: {
            position: 'bottom' // Legend at bottom for better visibility
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chart = new ApexCharts(document.querySelector("#projectDetailsCharts"), options);
    chart.render();
</script>