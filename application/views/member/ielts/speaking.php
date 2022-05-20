<div class="container">
    <div class="row ">
        <div class="col-md-12 mt-4">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">Speaking</h3>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-speak1" data-toggle="pill" href="#tabs-speak-1" role="tab" aria-controls="tabs-speak-1" aria-selected="true">PART 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-speak2" data-toggle="pill" href="#tabs-speak-2" role="tab" aria-controls="tabs-speak-2" aria-selected="false">PART 2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tabs-sepak3" data-toggle="pill" href="#tabs-speak-3" role="tab" aria-controls="tabs-speak-3" aria-selected="false">PART 3</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <?= form_open('speaking/store') ?>
                    <input type="hidden" name="id" value="">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <!-- part1 -->
                        <div class="tab-pane fade show active" id="tabs-speak-1" role="tabpanel" aria-labelledby="tabs-speak1">
                            <div class="card-body">
                                <p>
                                    <strong>SPEAKING PART 1</strong>
                                </p>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>
                                            <ul class="text-center">
                                                <li>
                                                    <h4>When you go shopping, do you prefer to pay for things in cash or by
                                                        card? [Why?]</h4>
                                                </li>
                                                <li>
                                                    <h4>Do you ever save money to buy special things? [Why/Why not?]</h4>
                                                </li>
                                                <li>
                                                    <h4>Would you ever take a job which had low pay? [Why/Why not?] </h4>
                                                </li>
                                                <li>
                                                    <h4>Would winning a lot of money make a big difference to your life?
                                                        [Why/Why not?]</h4>
                                                </li>
                                            </ul>
                                        </th>
                                    </tr>
                                </table>



                                <section class="experiment recordrtc">

                                    <h2 class="header">

                                        <select class="recording-media">

                                            <option value="record-video">Video</option>

                                            <option selected value="record-audio">Audio</option>

                                            <option value="record-screen">Screen</option>

                                        </select>

                                        <select class="media-container-format">

                                            <option>WebM</option< / </select>

                                                <button style="text-align:center;">Start Recording</button>

                                    </h2>

                                    <div style="display: none;">

                                        <button id="save-to-disk" style="display: none;">Save To Disk</button>

                                        <button id="open-new-tab" style="display: none;">Open New Tab</button>

                                        <button id="upload-to-server">Upload To Server</button>

                                    </div>

                                </section>


                            </div>
                        </div>

                        <!-- end part1 -->

                        <!-- part2 -->
                        <div class="tab-pane fade" id="tabs-speak-2" role="tabpanel" aria-labelledby="tabs-speak2">
                            <div class="card-body">
                                <p>
                                    <strong>Question 14 – 20
                                    </strong>
                                </p>


                            </div>
                        </div>
                        <!--end  part2 -->

                        <!-- part3 -->
                        <div class="tab-pane fade" id="tabs-speak-3" role="tabpanel" aria-labelledby="tabs-speak-3">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                            <button class="btn btn-primary float-center" type="Submit" id="submit" title="Submit">Submit</button>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
<script src="https://www.webrtc-experiment.com/gif-recorder.js"></script>
<script src="https://www.webrtc-experiment.com/getScreenId.js"></script>
<script src="https://www.webrtc-experiment.com/DetectRTC.js"> </script>

<!-- for Edige/FF/Chrome/Opera/etc. getUserMedia support -->
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script>
    $(document).ready(function() {
        $(":input").keyup(function() {
            $(this).val($(this).val().toUpperCase());

        });
    });
</script>