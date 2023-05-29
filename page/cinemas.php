<?php
  $city = tampilkan("SELECT * FROM cities ORDER BY city_name ASC");
?>
<div class="main-body-container skin">
  <div class="body-wrapper">
    <div class="sect-common">
      <div class="favorite-wrap">
        <h3 class="hidden">SHOWTIMES BY THEATERS</h3>
        <div class="sect-favorite">
          <h4><img src="https://cdn.cgv.id/assets/images/logo_small.png" alt="CGV Cinemas"></h4>
        </div>
        <div class="sect-city">
          <ul>
            <?php foreach($city as $city) : ?>
              <li class="city">
                <a href="javascript:void(0);"><?= $city['city_name'] ?></a>
                <div class="area" style="margin-left: -190px;">
                  <ul>
                    <?php $cinemas = tampilkan("SELECT * FROM cinemas WHERE city_id = ".$city['city_id']."") ?>
                    <?php foreach($cinemas as $cinemas) : ?>
                      <li class="on"><a title="<?= $cinemas['name'] ?>" href="#" id="<?= $cinemas['id'] ?>" class="cinema_fav"><?= $cinemas['name'] ?></a></li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="cinema-info-wrapper">
      <div class="cinema-info-header">
        <h2>cinema info</h2>
      </div>
      <div class="cinema-info-body">
        <h4>Grand Indonesia</h4>
        <div id="distance" style="text-align:center; font-size:15px; margin-bottom:10px"></div>
        <div class="cinema-info">
          <div class="cover_cinema" style="background-image : url('https://cdn.cgv.id/uploads/cinemas/002_mobile.jpg')">
            <div class="price_section">
              <div class="price_audi">
                <div class="audi-features-text">
                  Features : 12 Auditoriums |
                </div>


                <div class="audi_image">

                  <img src="https://cdn.cgv.id/assets/images/special_audi/STARIUM.png" alt="Image STARIUM">
                </div>
                <div class="audi_image">

                  <img src="https://cdn.cgv.id/assets/images/special_audi/4DX.png" alt="Image 4DX">
                </div>
                <div class="audi_image">

                  <img src="https://cdn.cgv.id/assets/images/special_audi/GOLDCLASS.png" alt="Image GOLD CLASS">
                </div>
                <div class="audi_image">

                  <img src="https://cdn.cgv.id/assets/images/special_audi/velvet.png" alt="Image VELVET">
                </div>
                <div class="audi_image">

                  <img src="https://cdn.cgv.id/assets/images/special_audi/ScreenX.png" alt="Image SCREENX">
                </div>


                <div class="audi_image">
                  <img src="https://cdn.cgv.id/assets/images/special_audi/private-box.png" alt="Image Private Box">
                </div>
              </div>
              <hr>
              <div class="price_group">
                TICKET PRICE
                <div class="sub_group_price">
                  <div class="row">
                    <div class="col-prices-cinema-sch">
                      <div class="row">
                        <div class="column">
                          <div class="title-price-info">REGULAR</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 50.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 60.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 75.000</td>
                            </tr>
                          </table>
                        </div>
                        <div class="column">
                          <div class="title-price-info">STARIUM</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 55.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 65.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 80.000</td>
                            </tr>
                          </table>
                        </div>


                        <div class="column">
                          <div class="title-price-info">4DX</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 90.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 120.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 130.000</td>
                            </tr>
                          </table>
                        </div>


                        <div class="column">
                          <div class="title-price-info">GOLD CLASS</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 100.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 150.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 200.000</td>
                            </tr>
                          </table>
                        </div>


                        <div class="column">
                          <div class="title-price-info">VELVET</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 100.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 150.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 200.000</td>
                            </tr>
                          </table>
                        </div>


                        <div class="column">
                          <div class="title-price-info">SCREENX</div>
                          <table class="table_price">
                            <tr>
                              <td>Mon-Thu</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 70.000</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 80.000</td>
                            </tr>
                            <tr>
                              <td>Weekend/Holiday</td>
                              <td class="double-dot-padding">:</td>
                              <td>Rp. 100.000</td>
                            </tr>
                          </table>
                        </div>


                      </div>
                    </div>
                    <div class="col-info-cinema-sch">
                      <div class="title-price-info">
                        Grand Indonesia
                      </div>
                      Grand Indonesia, West Mall Building 8th Floor Jl. M.H. Thamrin No. 1 Jakarta - Pusat
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="showtimes-wrapper">
      <h4>SCHEDULES <span>*Schedules are subject to change without prior notice</span></h4>
      <div class="sect-schedule">
        <div class="date-schedule">
          <div class="item-wrap">
            <ul class="slides item" style="width: 800px; height: 72px;">
              <li class="on">
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-22" id="load-schedule-date" date="2023-05-22">
                    <span> May</span>
                    <em>Mon</em>
                    <strong>22</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-23" id="load-schedule-date" date="2023-05-23">
                    <span> May</span>
                    <em>Tue</em>
                    <strong>23</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-24" id="load-schedule-date" date="2023-05-24">
                    <span> May</span>
                    <em>Wed</em>
                    <strong>24</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-25" id="load-schedule-date" date="2023-05-25">
                    <span> May</span>
                    <em>Thu</em>
                    <strong>25</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-26" id="load-schedule-date" date="2023-05-26">
                    <span> May</span>
                    <em>Fri</em>
                    <strong>26</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-27" id="load-schedule-date" date="2023-05-27">
                    <span> May</span>
                    <em>Sat</em>
                    <strong>27</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-28" id="load-schedule-date" date="2023-05-28">
                    <span> May</span>
                    <em>Sun</em>
                    <strong>28</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-29" id="load-schedule-date" date="2023-05-29">
                    <span> May</span>
                    <em>Mon</em>
                    <strong>29</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-30" id="load-schedule-date" date="2023-05-30">
                    <span> May</span>
                    <em>Tue</em>
                    <strong>30</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-31" id="load-schedule-date" date="2023-05-31">
                    <span> May</span>
                    <em>Wed</em>
                    <strong>31</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-01" id="load-schedule-date" date="2023-06-01">
                    <span> Jun</span>
                    <em>Thu</em>
                    <strong>01</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-02" id="load-schedule-date" date="2023-06-02">
                    <span> Jun</span>
                    <em>Fri</em>
                    <strong>02</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-03" id="load-schedule-date" date="2023-06-03">
                    <span> Jun</span>
                    <em>Sat</em>
                    <strong>03</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-04" id="load-schedule-date" date="2023-06-04">
                    <span> Jun</span>
                    <em>Sun</em>
                    <strong>04</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-05" id="load-schedule-date" date="2023-06-05">
                    <span> Jun</span>
                    <em>Mon</em>
                    <strong>05</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-06" id="load-schedule-date" date="2023-06-06">
                    <span> Jun</span>
                    <em>Tue</em>
                    <strong>06</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-07" id="load-schedule-date" date="2023-06-07">
                    <span> Jun</span>
                    <em>Wed</em>
                    <strong>07</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-08" id="load-schedule-date" date="2023-06-08">
                    <span> Jun</span>
                    <em>Thu</em>
                    <strong>08</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-09" id="load-schedule-date" date="2023-06-09">
                    <span> Jun</span>
                    <em>Fri</em>
                    <strong>09</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-10" id="load-schedule-date" date="2023-06-10">
                    <span> Jun</span>
                    <em>Sat</em>
                    <strong>10</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-11" id="load-schedule-date" date="2023-06-11">
                    <span> Jun</span>
                    <em>Sun</em>
                    <strong>11</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-12" id="load-schedule-date" date="2023-06-12">
                    <span> Jun</span>
                    <em>Mon</em>
                    <strong>12</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-13" id="load-schedule-date" date="2023-06-13">
                    <span> Jun</span>
                    <em>Tue</em>
                    <strong>13</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-14" id="load-schedule-date" date="2023-06-14">
                    <span> Jun</span>
                    <em>Wed</em>
                    <strong>14</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-15" id="load-schedule-date" date="2023-06-15">
                    <span> Jun</span>
                    <em>Thu</em>
                    <strong>15</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-16" id="load-schedule-date" date="2023-06-16">
                    <span> Jun</span>
                    <em>Fri</em>
                    <strong>16</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-17" id="load-schedule-date" date="2023-06-17">
                    <span> Jun</span>
                    <em>Sat</em>
                    <strong>17</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-18" id="load-schedule-date" date="2023-06-18">
                    <span> Jun</span>
                    <em>Sun</em>
                    <strong>18</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-19" id="load-schedule-date" date="2023-06-19">
                    <span> Jun</span>
                    <em>Mon</em>
                    <strong>19</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-20" id="load-schedule-date" date="2023-06-20">
                    <span> Jun</span>
                    <em>Tue</em>
                    <strong>20</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-21" id="load-schedule-date" date="2023-06-21">
                    <span> Jun</span>
                    <em>Wed</em>
                    <strong>21</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-22" id="load-schedule-date" date="2023-06-22">
                    <span> Jun</span>
                    <em>Thu</em>
                    <strong>22</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-23" id="load-schedule-date" date="2023-06-23">
                    <span> Jun</span>
                    <em>Fri</em>
                    <strong>23</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-24" id="load-schedule-date" date="2023-06-24">
                    <span> Jun</span>
                    <em>Sat</em>
                    <strong>24</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-25" id="load-schedule-date" date="2023-06-25">
                    <span> Jun</span>
                    <em>Sun</em>
                    <strong>25</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-26" id="load-schedule-date" date="2023-06-26">
                    <span> Jun</span>
                    <em>Mon</em>
                    <strong>26</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-27" id="load-schedule-date" date="2023-06-27">
                    <span> Jun</span>
                    <em>Tue</em>
                    <strong>27</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-28" id="load-schedule-date" date="2023-06-28">
                    <span> Jun</span>
                    <em>Wed</em>
                    <strong>28</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-29" id="load-schedule-date" date="2023-06-29">
                    <span> Jun</span>
                    <em>Thu</em>
                    <strong>29</strong>
                  </a>
                </div>
              </li>
              <li>
                <div class="day">
                  <a href="https://www.cgv.id/en/schedule/cinema/002/2023-06-30" id="load-schedule-date" date="2023-06-30">
                    <span> Jun</span>
                    <em>Fri</em>
                    <strong>30</strong>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <button type="button" class="btn-prev">View previous date</button>
          <button type="button" class="btn-next">View Next Date</button>
        </div>
        <div class="clear"></div>
        <div class="schedule-container">
          <div class="schedule-json">
            <div class="schedule-section">
              <div class="schedule-lists">
                <ul>
                  <li>
                    <div class="schedule-title"><a href="https://www.cgv.id/en/movies/info/23010000/2023-05-22">FAST X</a> <span>ACTION / 141 Minutes </span></div>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Gold Class 9</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391432" attr-mov="FAST X" attr-fmt="2D">10:45</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391428" attr-mov="FAST X" attr-fmt="2D">13:35</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391429" attr-mov="FAST X" attr-fmt="2D">16:25</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391430" attr-mov="FAST X" attr-fmt="2D">19:15</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391431" attr-mov="FAST X" attr-fmt="2D">22:05</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> SCREENX 2D <span class="audi-nm">ScreenX 11</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391439" attr-mov="FAST X" attr-fmt="SCREENX 2D">11:00</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391440" attr-mov="FAST X" attr-fmt="SCREENX 2D">13:50</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391441" attr-mov="FAST X" attr-fmt="SCREENX 2D">16:40</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391442" attr-mov="FAST X" attr-fmt="SCREENX 2D">19:30</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391438" attr-mov="FAST X" attr-fmt="SCREENX 2D">22:20</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Velvet 10</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391433" attr-mov="FAST X" attr-fmt="2D">11:15</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391434" attr-mov="FAST X" attr-fmt="2D">14:05</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391436" attr-mov="FAST X" attr-fmt="2D">16:55</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391437" attr-mov="FAST X" attr-fmt="2D">19:45</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391435" attr-mov="FAST X" attr-fmt="2D">22:35</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391385" attr-mov="FAST X" attr-fmt="2D">11:30</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391387" attr-mov="FAST X" attr-fmt="2D">14:20</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391389" attr-mov="FAST X" attr-fmt="2D">17:10</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391391" attr-mov="FAST X" attr-fmt="2D">20:00</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Sub-Audi 1</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391386" attr-mov="FAST X" attr-fmt="2D">11:30</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391388" attr-mov="FAST X" attr-fmt="2D">14:20</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391390" attr-mov="FAST X" attr-fmt="2D">17:10</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391392" attr-mov="FAST X" attr-fmt="2D">20:00</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 7</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391422" attr-mov="FAST X" attr-fmt="2D">12:00</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391419" attr-mov="FAST X" attr-fmt="2D">14:50</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391420" attr-mov="FAST X" attr-fmt="2D">17:40</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391421" attr-mov="FAST X" attr-fmt="2D">20:30</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400580" attr-mov="FAST X" attr-fmt="2D">12:20</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400581" attr-mov="FAST X" attr-fmt="2D">15:10</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391407" attr-mov="FAST X" attr-fmt="2D">18:00</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391408" attr-mov="FAST X" attr-fmt="2D">20:50</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 8</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400639" attr-mov="FAST X" attr-fmt="2D">12:50</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 4DX2D <span class="audi-nm">4DX 5</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391410" attr-mov="FAST X" attr-fmt="4DX2D">13:05</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391411" attr-mov="FAST X" attr-fmt="4DX2D">15:55</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391412" attr-mov="FAST X" attr-fmt="4DX2D">18:45</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391413" attr-mov="FAST X" attr-fmt="4DX2D">21:35</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> ATMOS 2D <span class="audi-nm">Starium 2</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391396" attr-mov="FAST X" attr-fmt="ATMOS 2D">13:20</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391397" attr-mov="FAST X" attr-fmt="ATMOS 2D">16:10</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391398" attr-mov="FAST X" attr-fmt="ATMOS 2D">19:00</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391399" attr-mov="FAST X" attr-fmt="ATMOS 2D">21:50</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="schedule-title"><a href="https://www.cgv.id/en/movies/info/23009700/2023-05-22">EVIL DEAD RISE</a> <span>HORROR / 96 Minutes </span></div>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400648" attr-mov="EVIL DEAD RISE" attr-fmt="2D">11:55</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400649" attr-mov="EVIL DEAD RISE" attr-fmt="2D">17:00</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400650" attr-mov="EVIL DEAD RISE" attr-fmt="2D">19:05</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400651" attr-mov="EVIL DEAD RISE" attr-fmt="2D">21:10</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="schedule-title"><a href="https://www.cgv.id/en/movies/info/23009000/2023-05-22">GUARDIANS OF THE GALAXY VOL. 3</a> <span>ACTION / 150 Minutes </span></div>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391415" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:15</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391416" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:15</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391417" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:15</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6404204" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:15</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6400640" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:00</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="schedule-title"><a href="https://www.cgv.id/en/movies/info/23011200/2023-05-22">FAST X (3D)</a> <span>ACTION / 141 Minutes </span></div>
                    <ul>
                      <li class="schedule-type">
                        <i class="fa fa-caret-right"></i> 3D <span class="audi-nm">Audi 8</span>
                      </li>
                      <li>
                        <ul class="showtime-lists">
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391426" attr-mov="FAST X (3D)" attr-fmt="3D">15:40</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391427" attr-mov="FAST X (3D)" attr-fmt="3D">18:30</a>
                          </li>
                          <li>

                            <a href="javascript:void(0);" class="active" id="6391425" attr-mov="FAST X (3D)" attr-fmt="3D">21:20</a>
                          </li>
                        </ul>
                        <div class="clear"></div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="showtimes-sum">
            <div class="sum-text">
              <font>SUMMARY :</font> Location: <span id="sum-location">Grand Indonesia</span> | Date: <span id="sum-showdate">Mon, 22 May 2023</span><br />
              Movie: <span id="sum-movie">-</span> | Class: <span id="sum-suite">-</span> | Time: <span id="sum-showtime">-</span>
            </div>
            <form action="" method="get">
              <input type="hidden" name="showdate" value="2023-05-22" />
              <input type="hidden" name="cinema" value="002" />
              <input type="submit" value="PICK YOUR SEATS" disabled />
            </form>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>