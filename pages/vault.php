<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'menu.php' ?>

<div class="container-fluid menu-push" role="main">
    <!-- Row -->
    <div class="row">

        <!-- Container -->
        <div class="container-fluid">

            <!-- Col -->
            <div class="col-md-8">


                <div class="documents">

                    <div class="page-header">
                        <h2>Personal vault</h2>
                    </div>

                    <a href="#" class="document"><span class="glyphicon glyphicon-bitcoin"></span><br>
                        <p>wallet.dat</p></a>
                    <a href="#" class="document"><span class="glyphicon glyphicon glyphicon-lock"></span><br>
                        <p>id_rsa</p></a>
                    <a href="#" class="document"><span class="glyphicon glyphicon-file"></span><br>
                        <p>birth_cert.pdf</p></a>
                    <a href="#" class="document"><span class="glyphicon glyphicon-file"></span><br>
                        <p>degree.pdf</p></a>

                    <!--for file upload -->
                    <div class="documents" id="placeholder"></div>

                    <a href="#" class="document uploadbutton buzz" data-toggle="modal" data-target="#myModal"><span
                            class="glyphicon glyphicon glyphicon-plus"></span><br>
                        <p>Add file</p></a>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Upload a file</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-orange btn-file">
                                               <input type="file" multiple> Browse
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="selected-file" readonly>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn  btn-orange upload" data-dismiss="modal">Upload
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--End for file upload -->
                    <div class="clear"></div>


                </div>

            </div>
            <!-- End Col -->

            <!-- Col -->
            <div class="col-md-4">

                <div class="messages-side">

                    <div class="page-header">
                        <h2>Correspondence</h2>
                    </div>

                    <div class="between">
                        January 2016
                    </div>
                    <a href="#" class="message">
                        <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                        <p>28 January</p>
                    </a>
                    <a href="#" class="message">
                        <h4><span class="glyphicon glyphicon-comment"></span> An other message</h4>
                        <p>21 January</p>
                    </a>

                    <div class="between">
                        2015
                    </div>
                    <a href="#" class="message">
                        <h4><span class="glyphicon glyphicon-comment"></span> Message</h4>
                        <p>21 November</p>
                    </a>
                    <a href="#" class="message">
                        <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                        <p>16 August</p>
                    </a>

                    <div class="between">
                        2014
                    </div>
                    <a href="#" class="message">
                        <h4><span class="glyphicon glyphicon-comment"></span> Title of message</h4>
                        <p>8 June</p>
                    </a>

                </div>

            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->

    </div>
    <!-- End Container -->

</div>
