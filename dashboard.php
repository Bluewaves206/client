<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.34.0/tabler-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'sidebar.php'; ?>
    <?php require 'topbar.php'; ?>
    <div class="mainContent">
        <div class="insideContent">
            <div class="contentHeading">
                <div class="innerContentHeading">
                    <h4>Project & Tasks Overview</h4>
                </div>
                <div class="innerContent">
                    <input type="text" name="" id="projectDate" class="projectDate form-control">

                    <input type="search" class="form-control searchProject" placeholder="Search Project">
                </div>
            </div>
            <div class="mainProjectList" id="projectListContainer">
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
                <div class="projectList" data-bs-toggle="modal" data-bs-target="#projectDetailsModal">
                    <div class="upperProject">
                        <div class="projectName">
                            <h5>J.k Chandra Website Redesign</h5>
                        </div>
                    </div>
                    <div class="midProject">
                        <div class="projectDesc">
                            <span>An office management app project stres administrative tasks by integrating tools for
                                scheduling...</span>
                        </div>
                    </div>
                    <div class="semiButtomProject">
                        <div class="leftProjectTl">
                            <div class="tlImage">
                                <img src="https://images.unsplash.com/photo-1543764477-646365e11da3?q=80&w=676&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            </div>
                            <div class="tlDetails">
                                <h6>Pritam Halder</h6>
                                <p>Team Lead</p>
                            </div>
                        </div>
                        <div class="rightProjectTl">
                            <div class="projectCmpltPercentage">
                                <h6>70%</h6>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttomProject">
                        <div class="assignHour">
                            <p>Estimate Hour: <span>200</span>hrs.</p>
                        </div>
                        <div class="assignMember">
                            <p>Assign Member: <span>6</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pagination"></div>
        </div>
    </div>
    <?php require_once 'projectDetailsModal.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function () {
            flatpickr("#projectDate", {
                dateFormat: "d/m/Y",
                mode: "range",
                defaultDate: [
                    new Date(new Date().getFullYear(), new Date().getMonth(), 1), // First of current month
                    new Date() // Today
                ]
            });
            $('#projectTicketTable').DataTable({
                pageLength: 5,
                order: false,
                dom: '<"row mt-2 justify-content-between"<"d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto"l><"d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto"f>><"table-responsive"tr><"row my-2 justify-content-between"<"d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto"i><"d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto"p>><"clear">',
            });

            const $projectItems = $('#projectListContainer .projectList').clone().get();

            // Initialize Pagination.js
            $('#projectListContainer').pagination({
                dataSource: $projectItems,
                pageSize: 3,
                callback: function (data, pagination) {
                    // Clear existing content
                    const $container = $('#projectListContainer').empty();

                    // Append paginated items
                    $.each(data, function (index, item) {
                        $container.append(item);
                    });
                }
            });

            // Initially hide all items
            $('#projectListContainer .projectList').hide();

        });
    </script>

</body>

</html>