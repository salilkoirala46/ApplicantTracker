  <?php
    require('header.php')
  ?>

    <section>
            <div class="container">
              <div class="inner">

                <!-- main content -->

                  <div class="main_content">
                    <!-- job description -->
                    <div class="job_description">
                      <div class="job_heading">
                         <p class="sub_title">
                        Job Application for <br></p>
                        <h5><strong>Sr. Project Manager</strong></h5>
                        <span class="sub_title">
                        Macs Technology</span>
                      <div class="job_date">
                        20 Nov 2010
                      </div>
                    </div>
                      <!-- job form -->
                      <div class="job_form">
                              <form>
                                <div class="form-row">
                                  <div class="form-group col">
                                    <input type="text" class="form-control" id="inputText4" placeholder="First name">
                                  </div>
                                  <div class="form-group col">
                                    <input type="text" class="form-control" id="inputText5" placeholder="Last Name">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col">
                                    <input type="text" class="form-control" id="inputJob" placeholder="Current job">
                                  </div>
                                  <div class="form-group col">
                                    <input type="text" class="form-control" id="inputCompany" placeholder="Company Name">
                                  </div>
                              </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Still in role
                                    </label>
                                  </div>
                                </div>

                                 <div class="input-group mb-3">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile02">
                                      <label class="custom-file-label" for="inputGroupFile02"><strong>Resume</strong></label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="">Upload</span>
                                    </div>
                                  </div>

                                  <div class="input-group mb-3">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile03">
                                      <label class="custom-file-label" for="inputGroupFile03"><strong>Cover Letter</strong></label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="">Upload</span>
                                    </div>
                                  </div>

                                <button type="submit" class="btn btn-info">Apply</button>

                            </form>
                      </div>
                      <!-- job form -->


                    </div>
                    <!-- job_description -->

                  </div>
                  <!-- main content -->

                  <!-- sidebar -->
              <div class="sidebar">

                <!-- sidetabs -->
                <div class="side_tabs">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="browse-tab" data-toggle="tab" href="#browse_by" role="tab" aria-controls="browse" aria-selected="true">Browse by</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                      </ul>

                </div>
                <!-- side tabs -->

                <!-- side_content -->
                <div class="side_content">

                  <!-- tab content -->
                      <div class="tab-content" id="myTabContent">

                        <!-- tab item 1 close -->
                        <div class="tab-pane fade show active" id="browse_by" role="tabpanel" aria-labelledby="browse-tab">

                          <!-- accordion -->
                          <div class="accordion" id="accordionExample">

                            <!-- card 1 -->
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Job Type
                                    </button>
                                  </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul class="list-group">
                                      <li class="list-group-item">Freelance</li>
                                      <li class="list-group-item">Full Time</li>
                                      <li class="list-group-item">Internship</li>
                                      <li class="list-group-item">Part-Time</li>
                                      <li class="list-group-item">Temporary</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- card 1 -->

                              <!-- card 2 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                      Job Salary
                                    </button>
                                  </h2>
                                </div>

                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul class="list-group">
                                      <li class="list-group-item">40,000-60,000</li>
                                      <li class="list-group-item">60,000-80,000</li>
                                      <li class="list-group-item">80,000-100,000</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- card 2 -->

                          <!-- card 3 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                      Job Category
                                    </button>
                                  </h2>
                                </div>

                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul class="list-group">
                                      <li class="list-group-item">Digital Marketing</li>
                                      <li class="list-group-item">Front End Developer</li>
                                      <li class="list-group-item">IT Support</li>
                                      <li class="list-group-item">UI Design</li>
                                      <li class="list-group-item">Backend Developer</li>
                                      <li class="list-group-item">Database Administrator</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- card 3 -->

                          <!-- card 4 -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                      Job Posted
                                    </button>
                                  </h2>
                                </div>

                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul class="list-group">
                                      <li class="list-group-item">Today</li>
                                      <li class="list-group-item">This Week</li>
                                      <li class="list-group-item">Last Week</li>
                                      <li class="list-group-item">This month</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- card 4 -->

                            </div>
                            <!-- accordion -->
                          
                        </div>
                        <!-- tab item 1 close -->


                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>

                      </div>
                        <!-- tab pane close -->
                </div>
                <!-- side_content -->

              </div>
              <!-- sidebar -->

            </div>
            <!-- inner class -->

          </div>
                <!-- container class -->

    </section>
  <?php
    require('footer.php')
  ?>