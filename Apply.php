  <?php
    require('header.php')
  ?>

    <section>
            <div class="container">
              <div class="inner">

                <!-- main content -->

                  <div class="main_content">
                    <form class="my_form">
                      <div class="form-group">
                        <input type="text" class="form-control" name="all_jobs" id="all_jobs" placeholder="All Jobs"/>
                         <input type="text" name="location" class="form-control" id="location" placeholder="Location">
                         <button type="button" id="submit" class="btn btn-primary" value="" name=""><i class="fa fa-search"></i> Search</button>
                      </div> 
                      <div class="form-row">
                            <label for="inputState">Radius</label>
                              <select id="inputState" class="form-control">
                                <option selected>1km</option>
                                <option>2km</option>
                                <option>3km</option>
                                <option>4km</option>
                                <option>>5km</option>
                              </select>
                      </div>
                      <div class="clear"></div>                  
                    </form>

                    <!-- job description -->
                    <div class="job_description">
                      <div class="job_heading">
                        <h5><strong>Sr. Finance Manager</strong></h5>
                        <span class="sub_title">
                        Macs Technology</span></a>
                      <div class="job_date">
                        20 Nov 2010
                      </div>
                    </div>
                      <!-- job detail -->
                      <div class="job_detail">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <a href="apply_form.php"><button type="button" class="btn btn-info">Apply</button></a>
                      </div>
                      <!-- job detail -->


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
    require('header.php')
  ?>