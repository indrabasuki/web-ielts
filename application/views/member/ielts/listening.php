<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class=" mt-2 bg-info text-white shadow text-center mb-1">
                <h3 class="mb-0 font-weight-bold text-uppercase">Remaining Time
                    : <i class="fas fa-clock"></i> <span class="sisawaktu"></span> </h3>
            </div>
        </div>

    </div>
    <div class="row ">
        <div class="col-md-12 mt-1">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">LISTENING</h3>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-part1" data-toggle="pill" href="#tabs-part-1" role="tab" aria-controls="tabs-part-1" aria-selected="true">PART 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-part2" data-toggle="pill" href="#tabs-part-2" role="tab" aria-controls="tabs-part-2" aria-selected="false">PART 2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tabs-part3" data-toggle="pill" href="#tabs-part-3" role="tab" aria-controls="tabs-part-3" aria-selected="false">PART 3</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tabs-part4" data-toggle="pill" href="#tabs-part-4" role="tab" aria-controls="tabs-part-4" aria-selected="false">PART 4</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <?= form_open('listening/store') ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <!-- part1 -->
                        <div class="tab-pane fade show active" id="tabs-part-1" role="tabpanel" aria-labelledby="tabs-part1">
                            <div class="card-body">
                                <p>
                                    <strong>Questions 1-10</strong>
                                </p>
                                <p>Complete the notes below.</p>
                                <p>Write <strong>ONE WORD AND/OR A NUMBER </strong>for each answer</p>

                                <table class="table table-bordered">
                                    <tr>
                                        <th class="text-center">TOTAL HEALTH CLINIC</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PATIENT DETAILS</strong></p>
                                            <p><strong>Personal information</strong></p>
                                            <p>Example</p>
                                            <p>Name Julie Anne __________</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <p style="margin-left: 10%;">Contact phone
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>1.</b><input type="text" name="params_1" size="40" placeholder="Your answer">
                                            </p>
                                            <p style="margin-left: 10%;">Date of birth
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <b>2.</b><input type="text" name="params_2" size="40" placeholder="Your answer">,
                                                1992
                                            </p>
                                            <p style="margin-left: 10%;">Occupation works as a
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>3.</b><input size="40" type="text" name="params_3" placeholder="Your answer">
                                            </p>
                                            <p style="margin-left: 10%;">Insurance company
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>4.</b><input size="40" type="text" name="params_4" placeholder="Your answer"> Life Insurance
                                            </p>
                                            <p>
                                                <b>Details of the problem</b>
                                            </p>
                                            <p style="margin-left: 10%;">Type of problem
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                pain in her left
                                                <b>5.</b><input size="40" name="params_5" type="text" placeholder="Your answer">

                                            </p>
                                            <p style="margin-left: 10%;">When it began
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <b>6.</b><input size="40" type="text" name="params_6" placeholder="Your answer">ago
                                            </p>
                                            <p style="margin-left: 10%;">Action already taken
                                                &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; has taken painkillers and applied ice
                                            </p>
                                            <p>
                                                <b>Other information</b>
                                            </p>
                                            <p style="margin-left: 10%;">Sports played
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                belongs to a <b>7.</b><input type="text" size="40" placeholder="Your answer" name="params_7">
                                                club
                                            </p>
                                            <p style="margin-left: 10%;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                goes <b>8.</b><input type="text" size="40" placeholder="Your answer" name="params_8"> regularly
                                            </p>
                                            <p style="margin-left: 10%;">Medical history
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                injured her <b>9.</b><input type="text" size="40" placeholder="Your answer" name="params_9"> last
                                                year
                                            </p>
                                            <p style="margin-left: 10%;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                no allergies
                                            </p>
                                            <p style="margin-left: 10%;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                no regular medication apart from <b>10</b><input type="text" size="40" placeholder="Your answer" name="params_10">
                                            </p>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- end part1 -->

                        <!-- part2 -->
                        <div class="tab-pane fade" id="tabs-part-2" role="tabpanel" aria-labelledby="tabs-part2">
                            <div class="card-body">
                                <p>
                                    <strong>Questions 11-20
                                    </strong>
                                </p>
                                <p>Question 11-14.</p>
                                <p>Choose the correct letter, <strong>A, B, C.</strong> </p>
                                <hr>
                                <p class="text-center"><strong>Minister Park
                                    </strong></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>11.</b> The park was originally established
                                        </p>
                                        <div class="form-group">
                                            <select name="params_11" class="form-control">
                                                <option disabled selected>Select Your Answer</option>
                                                <option value="A"> <strong>A.</strong> as an amenity provided by the
                                                    city
                                                    council.
                                                </option>
                                                <option value="B"><b>B.</b> as land belonging to a private house.

                                                </option>
                                                <option value="C"><b>C.</b> as a shared area set up by the local
                                                    community.
                                                </option>
                                            </select>
                                        </div>

                                        <p><b>12.</b> Why is there a statue of Diane Gosforth in the park? </p>
                                        <div class="form-group">
                                            <select name="params_12" class="form-control">
                                                <option disabled selected>Select Your Answer</option>
                                                <option value="A"> <strong>A.</strong> She was a resident who helped to
                                                    lead a
                                                    campaign.

                                                </option>
                                                <option value="B"><b>B.</b> She was a council member responsible for
                                                    giving the
                                                    public access.
                                                </option>
                                                <option value="C"><b>C.</b>She was a senior worker at the park for many
                                                    years.
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p><b>13.</b> During the First World War, the park was mainly used for? </p>
                                        <div class="form-group">
                                            <select name="params_13" class="form-control">
                                                <option disabled selected>Select Your Answer</option>
                                                <option value="A"> <strong>A.</strong> Shexercises by troops.
                                                </option>
                                                <option value="B"><b>B.</b>growing vegetables
                                                </option>
                                                <option value="C"><b>C.</b>public meetings
                                                </option>
                                            </select>
                                        </div>
                                        <p><b>14.</b> TWhen did the physical transformation of the park begin?
                                        </p>
                                        <div class="form-group">
                                            <select name="params_14" class="form-control">
                                                <option disabled selected>Select Your Answer</option>
                                                <option value="A"> <strong>A.</strong> 2013
                                                </option>
                                                <option value="B"><b>B.</b>2015
                                                </option>
                                                <option value="C"><b>C.</b>2016
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <p>Question 15-20.</p>
                                <p>Label the map below.</p>
                                <p>Write the correct letter, <strong>A-I</strong> , next to Questions 15-20</p>
                                <div class="row">
                                    <div class="colmd-6">
                                        <img src="<?= base_url('public/img/oqntcfuxnfxvakvttoevsxisksnfbf.png') ?>" alt="image" class="text-center" width="450">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <p><b>15.</b> statue of Diane Gosforth </p>
                                            <select name="params_15" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 15</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>16.</b> wooden sculptures </p>
                                            <select name="params_16" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 16</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <p><b>17.</b> playground </p>
                                            <select name="params_17" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 17</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>18.</b> maze </p>
                                            <select name="params_18" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 18</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b>19.</b> tennis courts </p>
                                            <select name="params_19" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 19</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <p><b> 20.</b>fitness area</p>
                                            <select name="params_20" class="form-control form-control-sm">
                                                <option disabled selected>Select Your Answer 20</option>
                                                <option value="A"> <strong>A</strong>
                                                <option value="B"> <strong>B</strong>
                                                <option value="C"> <strong>C</strong>
                                                <option value="D"> <strong>D</strong>
                                                <option value="E"> <strong>E</strong>
                                                <option value="F"> <strong>F</strong>
                                                <option value="G"> <strong>G</strong>
                                                <option value="H"> <strong>H</strong>
                                                <option value="I"> <strong>I</strong>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end  part2 -->

                        <!-- part3 -->
                        <div class="tab-pane fade" id="tabs-part-3" role="tabpanel" aria-labelledby="tabs-part-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>
                                        <strong>Questions 21-30
                                        </strong>
                                    </p>
                                    <p>Question 21-26.</p>
                                    <p> Complete the notes below.</p>
                                    <p>Write <strong> ONE WORD ONLY </strong>for each answer.
                                    </p>
                                    <hr>
                                    <p>What Hazel should analyse about items in a newspaper:</p>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <p>what <b>21.</b> <input type="text" name="params_21" placeholder="Your answer" size="25"> the items is on
                                                </p>
                                                <p>the <b>22.</b> <input type="text" name="params_22" placeholder="Your answer" size="25"> of the item,
                                                    including the
                                                    headline
                                                </p>
                                                <p>any <b>23.</b> <input type="text" name="params_23" placeholder="Your answer" size="25"> accompanying the
                                                    item</p>
                                                <p>the <b>24.</b> <input type="text" name="params_24" placeholder="Your answer" size="25"> of the item,
                                                    e.g. what’s
                                                    made
                                                    prominent</p>
                                                <p>the writer’s main <b>25.</b> <input type="text" name="params_25" placeholder="Your answer" size="25">
                                                </p>
                                                <p>the <b>26.</b> <input type="text" name="params_26" placeholder="Your answer" size="25"> the writer may
                                                    make about
                                                    the
                                                    reader</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <hr>
                                    <p>Question 27-30.</p>
                                    <p>Complete the notes below</p>
                                    <p>What does Hazel decide to do about each of the following types of articles?</p>
                                    <p> Write the correct letter,<strong> A, B, C, </strong>next to Questions 27-30</p>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <p>She will definitely look for a suitable article.</p>
                                                <p>She may look for a suitable article.</p>
                                                <p>She definitely won’t look for an article</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p><strong>Types of articles</strong></p>
                                    <p><b>27.</b> national news item <input type="text" name="params_27" placeholder="Your answer" size="25"></p>
                                    <p><b>28.</b> editorial<input type="text" name="params_28" placeholder="Your answer" size="25"></p>
                                    <p><b>29.</b> human interest <input type="text" name="params_29" placeholder="Your answer" size="25"></p>
                                    <p><b>30.</b> arts <input type="text" name="params_30" placeholder="Your answer" size="25"></p>
                                </div>
                            </div>
                        </div>
                        <!-- end part3 -->


                        <!-- part4 -->
                        <div class="tab-pane fade" id="tabs-part-4" role="tabpanel" aria-labelledby="tabs-part4">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>PART 4</strong>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong>Questions 31-40
                                        </strong>
                                    </p>
                                    <p>Question 31-40.</p>
                                    <p>Complete the notes below.</p>
                                    <p>Write <strong> ONE WORD ONLY </strong>for each answer.
                                    </p>
                                    <hr>
                                    <p>What Hazel should analyse about items in a newspaper:</p>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <p class="text-center"><strong>Conflict at work</strong> </p>
                                                <p>Conflict mostly consists of behaviour in the general category of <b>31.</b>
                                                    <input type="text" name="params_31" placeholder="Your answer" size="25">
                                                </p>
                                                <p>Often a result of people wanting to prove their <b>32.</b>
                                                    <input type="text" name="params_32" placeholder="Your answer" size="25">
                                                </p>
                                                <p>Also caused by differences in <b>33.</b>
                                                    <input type="text" name="params_33" placeholder="Your answer" size="25"> between people
                                                </p>
                                                <p><b>34.</b>
                                                    <input type="text" name="params_34" placeholder="Your answer" size="25">conflicts: people more concerned about own team than about
                                                    company
                                                </p>
                                                <p>Conflict-related stress can cause <b>35.</b>
                                                    <input type="text" name="params_35" placeholder="Your answer" size="25"> that may last for months
                                                </p><br>
                                                <p><strong>Chief Executives (CEOs)</strong></p>
                                                <p>May have both <b>36.</b>
                                                    <input type="text" name="params_36" placeholder="Your answer" size="25"> and anxiety
                                                </p>
                                                <p>May not like to have their decisions questioned</p>
                                                <p>There may be conflict between people who have different <b>37.</b>
                                                    <input type="text" name="params_37" placeholder="Your answer" size="25">
                                                </p><br>
                                                <p><strong>Other managers</strong></p>
                                                <p>A structure that is more <b>38.</b>
                                                    <input type="text" name="params_38" placeholder="Your answer" size="25">may create a feeling of uncertainty
                                                    about who staff should report to.
                                                </p><br>
                                                <p><strong>Minimising conflict</strong></p>
                                                <p>Bosses need to try hard to gain <b>39.</b>
                                                    <input type="text" name="params_39" placeholder="Your answer" size="25">
                                                </p>
                                                <p>Someone from outside the company may be given the role of <b>40
                                                        .</b>
                                                    <input type="text" name="params_40
                                                " placeholder="Your answer" size="25"> in
                                                    order to resolve conflicts.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <button onclick="javascript:return confirm('Are you sure ?')" class="btn btn-primary" id="submit" type="submit">Submit <i class="fas fa-check"></i></button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(":input").keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });
        Date.prototype.addHours = function(h) {
            this.setHours(this.getHours() + h);
            return this;
        }
        var today = new Date().addHours(1);
        var date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var datetime = date + " " + time;

        sisawaktu(datetime);


    });
</script>