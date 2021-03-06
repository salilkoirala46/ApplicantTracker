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

                    <!-- Latest Jobs -->
                    <div class="latest_jobs">
                      <h4>Latest Jobs</h4>
                      <div class="latest_jobs_form">
                        <form>
                            <div class="form-group">
                              <input type="checkbox" name="freelance" id="freelance" value="freelance"><label>Freelance</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" name="part_time" id="part_time" value="part_time"><label>Part Time</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" name="full_time" id="full_time" value="full_time"><label>Full Time</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" name="casual" id="casual" value="casual"><label>Casual</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" name="internship" id="internship" value="internship"><label>Internship</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" name="temporary" id="temporary" value="temporary"><label>Temporary</label>
                            </div>
                          <div class="form-group">
                            <input type="button" name="filter" value="Filter">
                          </div>
                        </form>
                      </div>
                      </div>
                    <!-- Latest Jobs -->

                    <!-- Job Listing -->
                    <div class="job_listing">

                      <!-- all list -->
                        <div class="all_list">
                          <div class="list list1">
                              <div class="list_type">
                                Full time
                              </div>
                              <div class="list_title">
                                <a href="apply.php"><h5>Junior Frontend Developer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Surry Hills</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                            <div class="list list2">
                              <div class="list_type">
                                Freelance
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Web developr Intern</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Redfern</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                          <div class="list list3">
                              <div class="list_type">
                                Part-Time
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Front End Developer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Seven Hills</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>


                          <div class="list list4">
                              <div class="list_type">
                                Casual
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Wordpress Developer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Maroubra</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                          <div class="list list5">
                              <div class="list_type">
                                Part-Time
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Magento Developer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Sydney CBD</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                          <div class="list list6">
                              <div class="list_type">
                                Intern
                              </div>
                              <div class="list_title">
                                <a href="apply.php"><h5>Digital Marketer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Sydney CBD</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                          <div class="list list7">
                              <div class="list_type">
                                Part-Time
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Shopify Developer</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Paramatta</strong>
                                <p>Sydney,Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>

                          <div class="list list8">
                              <div class="list_type">
                                Full Time
                              </div>
                              <div class="list_title">
                               <a href="apply.php"> <h5>Database Administrator</h5>
                                <span>Macs Technology</span></a>
                              </div>
                              <div class="location">
                                <strong>Sydney CBD</strong>
                                <p>Sydney, Australia</p>
                              </div>
                              <div class="date">
                                23 Nov 2014
                              </div>
                          </div>
                          <!-- end of list -->


                        </div>
                        <!-- end of all list -->

                  </div>
                    <!-- Job listing -->
                    <div class="clear"></div>
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