<?php
    $id = $_GET['id'];
    $data = tampilkan("SELECT * FROM movies WHERE movie_id = $id")[0];
?>
<div class="main-body-container skin">
    <div class="body-wrapper">
        <div class="movie-detail-body">
            <div class="trailer-wrapper">
                <div class="poster-section left">
                    <img src="assets/images/<?= $data['poster'] ?>">
                </div>
                <div class="trailer-section">
                    <div class="video_thumb_section">
                        <img src="assets/images/<?= $data['trailer'] ?>" width="655" height="450" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="movie-info-wrapper">
                <div class="movie-info-title">
                    <?= $data['title'] ?>
                </div>
                <div class="synopsis-section">
                    <div class="movie-add-info left">
                        <ul>
                            <li>STARRING : <?= $data['starring'] ?></li>
                            <li>DIRECTOR : <?= $data['director'] ?></li>
                            <li>CENSOR RATING : <?= $data['censor_rating'] ?></li>
                            <li>GENRE : <?= $data['genre'] ?></li>
                            <li>LANGUAGE : <?= $data['language'] ?></li>
                            <li>SUBTITLE : <?= $data['subtitle'] ?></li>
                            <li>DURATION : <?= $data['duration'] ?></li>
                        </ul>
                    </div>
                    <div class="movie-synopsis right">
                        <?= $data['description'] ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- Hide schedule bar -->
        <!-- <div class="showtimes-wrapper">
            <h4>SCHEDULES <span>*Schedules are subject to change without prior notice</span></h4>
            <div class="sect-schedule">
                <div class="date-schedule">
                    <div class="item-wrap">
                        <ul class="slides item" style="width: 800px; height: 72px;">
                            <li class="on">
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-22" id="load-schedule-date" date="2023-05-22">
                                        <span> May</span>
                                        <em>Mon</em>
                                        <strong>22</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-23" id="load-schedule-date" date="2023-05-23">
                                        <span> May</span>
                                        <em>Tue</em>
                                        <strong>23</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-24" id="load-schedule-date" date="2023-05-24">
                                        <span> May</span>
                                        <em>Wed</em>
                                        <strong>24</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-25" id="load-schedule-date" date="2023-05-25">
                                        <span> May</span>
                                        <em>Thu</em>
                                        <strong>25</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-26" id="load-schedule-date" date="2023-05-26">
                                        <span> May</span>
                                        <em>Fri</em>
                                        <strong>26</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-27" id="load-schedule-date" date="2023-05-27">
                                        <span> May</span>
                                        <em>Sat</em>
                                        <strong>27</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-28" id="load-schedule-date" date="2023-05-28">
                                        <span> May</span>
                                        <em>Sun</em>
                                        <strong>28</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-29" id="load-schedule-date" date="2023-05-29">
                                        <span> May</span>
                                        <em>Mon</em>
                                        <strong>29</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-30" id="load-schedule-date" date="2023-05-30">
                                        <span> May</span>
                                        <em>Tue</em>
                                        <strong>30</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-05-31" id="load-schedule-date" date="2023-05-31">
                                        <span> May</span>
                                        <em>Wed</em>
                                        <strong>31</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-01" id="load-schedule-date" date="2023-06-01">
                                        <span> Jun</span>
                                        <em>Thu</em>
                                        <strong>01</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-02" id="load-schedule-date" date="2023-06-02">
                                        <span> Jun</span>
                                        <em>Fri</em>
                                        <strong>02</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-03" id="load-schedule-date" date="2023-06-03">
                                        <span> Jun</span>
                                        <em>Sat</em>
                                        <strong>03</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-04" id="load-schedule-date" date="2023-06-04">
                                        <span> Jun</span>
                                        <em>Sun</em>
                                        <strong>04</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-05" id="load-schedule-date" date="2023-06-05">
                                        <span> Jun</span>
                                        <em>Mon</em>
                                        <strong>05</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-06" id="load-schedule-date" date="2023-06-06">
                                        <span> Jun</span>
                                        <em>Tue</em>
                                        <strong>06</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-07" id="load-schedule-date" date="2023-06-07">
                                        <span> Jun</span>
                                        <em>Wed</em>
                                        <strong>07</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-08" id="load-schedule-date" date="2023-06-08">
                                        <span> Jun</span>
                                        <em>Thu</em>
                                        <strong>08</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-09" id="load-schedule-date" date="2023-06-09">
                                        <span> Jun</span>
                                        <em>Fri</em>
                                        <strong>09</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-10" id="load-schedule-date" date="2023-06-10">
                                        <span> Jun</span>
                                        <em>Sat</em>
                                        <strong>10</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-11" id="load-schedule-date" date="2023-06-11">
                                        <span> Jun</span>
                                        <em>Sun</em>
                                        <strong>11</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-12" id="load-schedule-date" date="2023-06-12">
                                        <span> Jun</span>
                                        <em>Mon</em>
                                        <strong>12</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-13" id="load-schedule-date" date="2023-06-13">
                                        <span> Jun</span>
                                        <em>Tue</em>
                                        <strong>13</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-14" id="load-schedule-date" date="2023-06-14">
                                        <span> Jun</span>
                                        <em>Wed</em>
                                        <strong>14</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-15" id="load-schedule-date" date="2023-06-15">
                                        <span> Jun</span>
                                        <em>Thu</em>
                                        <strong>15</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-16" id="load-schedule-date" date="2023-06-16">
                                        <span> Jun</span>
                                        <em>Fri</em>
                                        <strong>16</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-17" id="load-schedule-date" date="2023-06-17">
                                        <span> Jun</span>
                                        <em>Sat</em>
                                        <strong>17</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-18" id="load-schedule-date" date="2023-06-18">
                                        <span> Jun</span>
                                        <em>Sun</em>
                                        <strong>18</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-19" id="load-schedule-date" date="2023-06-19">
                                        <span> Jun</span>
                                        <em>Mon</em>
                                        <strong>19</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-20" id="load-schedule-date" date="2023-06-20">
                                        <span> Jun</span>
                                        <em>Tue</em>
                                        <strong>20</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-21" id="load-schedule-date" date="2023-06-21">
                                        <span> Jun</span>
                                        <em>Wed</em>
                                        <strong>21</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-22" id="load-schedule-date" date="2023-06-22">
                                        <span> Jun</span>
                                        <em>Thu</em>
                                        <strong>22</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-23" id="load-schedule-date" date="2023-06-23">
                                        <span> Jun</span>
                                        <em>Fri</em>
                                        <strong>23</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-24" id="load-schedule-date" date="2023-06-24">
                                        <span> Jun</span>
                                        <em>Sat</em>
                                        <strong>24</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-25" id="load-schedule-date" date="2023-06-25">
                                        <span> Jun</span>
                                        <em>Sun</em>
                                        <strong>25</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-26" id="load-schedule-date" date="2023-06-26">
                                        <span> Jun</span>
                                        <em>Mon</em>
                                        <strong>26</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-27" id="load-schedule-date" date="2023-06-27">
                                        <span> Jun</span>
                                        <em>Tue</em>
                                        <strong>27</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-28" id="load-schedule-date" date="2023-06-28">
                                        <span> Jun</span>
                                        <em>Wed</em>
                                        <strong>28</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-29" id="load-schedule-date" date="2023-06-29">
                                        <span> Jun</span>
                                        <em>Thu</em>
                                        <strong>29</strong>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="day">
                                    <a href="https://www.cgv.id/en/movies/info/23009000/2023-06-30" id="load-schedule-date" date="2023-06-30">
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
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/067/2023-05-22">Kediri Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403413" attr-that="Kediri Mall" attr-that-cd="067" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:25</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403412" attr-that="Kediri Mall" attr-that-cd="067" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/024/2023-05-22">Focal Point</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395627" attr-that="Focal Point" attr-that-cd="024" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395629" attr-that="Focal Point" attr-that-cd="024" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395631" attr-that="Focal Point" attr-that-cd="024" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/020/2023-05-22">Slipi Jaya</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404512" attr-that="Slipi Jaya" attr-that-cd="020" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6399970" attr-that="Slipi Jaya" attr-that-cd="020" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/036/2023-05-22">Bekasi Trade Center</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394058" attr-that="Bekasi Trade Center" attr-that-cd="036" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394059" attr-that="Bekasi Trade Center" attr-that-cd="036" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394060" attr-that="Bekasi Trade Center" attr-that-cd="036" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394061" attr-that="Bekasi Trade Center" attr-that-cd="036" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/017/2023-05-22">Pakuwon Mall Jogja</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 7</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400111" attr-that="Pakuwon Mall Jogja" attr-that-cd="017" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400112" attr-that="Pakuwon Mall Jogja" attr-that-cd="017" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400113" attr-that="Pakuwon Mall Jogja" attr-that-cd="017" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400107" attr-that="Pakuwon Mall Jogja" attr-that-cd="017" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/001/2023-05-22">Paris Van Java</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394529" attr-that="Paris Van Java" attr-that-cd="001" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394530" attr-that="Paris Van Java" attr-that-cd="001" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394531" attr-that="Paris Van Java" attr-that-cd="001" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394532" attr-that="Paris Van Java" attr-that-cd="001" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">19:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/030/2023-05-22">Depok Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6388129" attr-that="Depok Mall" attr-that-cd="030" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6388131" attr-that="Depok Mall" attr-that-cd="030" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400400" attr-that="Depok Mall" attr-that-cd="030" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:55</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400406" attr-that="Depok Mall" attr-that-cd="030" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/007/2023-05-22">Bekasi Cyber Park</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 9</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6386106" attr-that="Bekasi Cyber Park" attr-that-cd="007" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6386107" attr-that="Bekasi Cyber Park" attr-that-cd="007" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6386108" attr-that="Bekasi Cyber Park" attr-that-cd="007" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6386109" attr-that="Bekasi Cyber Park" attr-that-cd="007" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/027/2023-05-22">Social Market</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395501" attr-that="Social Market" attr-that-cd="027" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395504" attr-that="Social Market" attr-that-cd="027" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395502" attr-that="Social Market" attr-that-cd="027" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/013/2023-05-22">Jwalk Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403444" attr-that="Jwalk Mall" attr-that-cd="013" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403445" attr-that="Jwalk Mall" attr-that-cd="013" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403447" attr-that="Jwalk Mall" attr-that-cd="013" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/041/2023-05-22">Transmart Solo</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6385632" attr-that="Transmart Solo" attr-that-cd="041" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">10:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6385635" attr-that="Transmart Solo" attr-that-cd="041" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404116" attr-that="Transmart Solo" attr-that-cd="041" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/087/2023-05-22">Holiday Pekanbaru</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403689" attr-that="Holiday Pekanbaru" attr-that-cd="087" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6388922" attr-that="Holiday Pekanbaru" attr-that-cd="087" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404338" attr-that="Holiday Pekanbaru" attr-that-cd="087" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">22:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/040/2023-05-22">Lagoon Avenue Bekasi</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404632" attr-that="Lagoon Avenue Bekasi" attr-that-cd="040" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404635" attr-that="Lagoon Avenue Bekasi" attr-that-cd="040" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404638" attr-that="Lagoon Avenue Bekasi" attr-that-cd="040" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/014/2023-05-22">BEC Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393718" attr-that="BEC Mall" attr-that-cd="014" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393719" attr-that="BEC Mall" attr-that-cd="014" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:05</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393720" attr-that="BEC Mall" attr-that-cd="014" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:05</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393721" attr-that="BEC Mall" attr-that-cd="014" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:05</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/081/2023-05-22">Maspion Square</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395708" attr-that="Maspion Square" attr-that-cd="081" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403765" attr-that="Maspion Square" attr-that-cd="081" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395684" attr-that="Maspion Square" attr-that-cd="081" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395685" attr-that="Maspion Square" attr-that-cd="081" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/028/2023-05-22">Bella Terra Lifestyle Center</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403885" attr-that="Bella Terra Lifestyle Center" attr-that-cd="028" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:05</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403773" attr-that="Bella Terra Lifestyle Center" attr-that-cd="028" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:55</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403774" attr-that="Bella Terra Lifestyle Center" attr-that-cd="028" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:55</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404200" attr-that="Bella Terra Lifestyle Center" attr-that-cd="028" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/031/2023-05-22">Transmart Maguwo</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6398193" attr-that="Transmart Maguwo" attr-that-cd="031" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:10</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6398194" attr-that="Transmart Maguwo" attr-that-cd="031" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:10</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6398195" attr-that="Transmart Maguwo" attr-that-cd="031" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/043/2023-05-22">Transmart Lampung</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400584" attr-that="Transmart Lampung" attr-that-cd="043" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6384633" attr-that="Transmart Lampung" attr-that-cd="043" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6384634" attr-that="Transmart Lampung" attr-that-cd="043" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:10</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6384635" attr-that="Transmart Lampung" attr-that-cd="043" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/039/2023-05-22">Transmart Palembang</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6397686" attr-that="Transmart Palembang" attr-that-cd="039" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6397687" attr-that="Transmart Palembang" attr-that-cd="039" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:20</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/064/2023-05-22">PTC Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395320" attr-that="PTC Mall" attr-that-cd="064" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395319" attr-that="PTC Mall" attr-that-cd="064" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:40</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/011/2023-05-22">Miko Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390387" attr-that="Miko Mall" attr-that-cd="011" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390388" attr-that="Miko Mall" attr-that-cd="011" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390389" attr-that="Miko Mall" attr-that-cd="011" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390390" attr-that="Miko Mall" attr-that-cd="011" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/065/2023-05-22">Paradise Walk Serpong</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389448" attr-that="Paradise Walk Serpong" attr-that-cd="065" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389449" attr-that="Paradise Walk Serpong" attr-that-cd="065" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389450" attr-that="Paradise Walk Serpong" attr-that-cd="065" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389451" attr-that="Paradise Walk Serpong" attr-that-cd="065" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/016/2023-05-22">Grage City Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390206" attr-that="Grage City Mall" attr-that-cd="016" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390208" attr-that="Grage City Mall" attr-that-cd="016" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390209" attr-that="Grage City Mall" attr-that-cd="016" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/052/2023-05-22">Vivo Sentul</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401136" attr-that="Vivo Sentul" attr-that-cd="052" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401138" attr-that="Vivo Sentul" attr-that-cd="052" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:25</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401127" attr-that="Vivo Sentul" attr-that-cd="052" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">19:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/037/2023-05-22">Aeon Mall JGC</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404226" attr-that="Aeon Mall JGC" attr-that-cd="037" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404291" attr-that="Aeon Mall JGC" attr-that-cd="037" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404292" attr-that="Aeon Mall JGC" attr-that-cd="037" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404293" attr-that="Aeon Mall JGC" attr-that-cd="037" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/069/2023-05-22">Living Plaza Jababeka</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">AUDI 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403314" attr-that="Living Plaza Jababeka" attr-that-cd="069" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403315" attr-that="Living Plaza Jababeka" attr-that-cd="069" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403318" attr-that="Living Plaza Jababeka" attr-that-cd="069" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/045/2023-05-22">Transmart Graha Bintaro</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403341" attr-that="Transmart Graha Bintaro" attr-that-cd="045" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403342" attr-that="Transmart Graha Bintaro" attr-that-cd="045" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403343" attr-that="Transmart Graha Bintaro" attr-that-cd="045" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403344" attr-that="Transmart Graha Bintaro" attr-that-cd="045" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/029/2023-05-22">23 Paskal Shopping Center</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401231" attr-that="23 Paskal Shopping Center" attr-that-cd="029" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">11:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401232" attr-that="23 Paskal Shopping Center" attr-that-cd="029" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401234" attr-that="23 Paskal Shopping Center" attr-that-cd="029" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404396" attr-that="23 Paskal Shopping Center" attr-that-cd="029" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:20</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/006/2023-05-22">Central Park</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391794" attr-that="Central Park" attr-that-cd="006" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391795" attr-that="Central Park" attr-that-cd="006" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391792" attr-that="Central Park" attr-that-cd="006" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391793" attr-that="Central Park" attr-that-cd="006" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/018/2023-05-22">Marvell City</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394647" attr-that="Marvell City" attr-that-cd="018" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394649" attr-that="Marvell City" attr-that-cd="018" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6394650" attr-that="Marvell City" attr-that-cd="018" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/003/2023-05-22">Pacific Place</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389744" attr-that="Pacific Place" attr-that-cd="003" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389745" attr-that="Pacific Place" attr-that-cd="003" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389746" attr-that="Pacific Place" attr-that-cd="003" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389747" attr-that="Pacific Place" attr-that-cd="003" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/092/2023-05-22">Poins Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404264" attr-that="Poins Mall" attr-that-cd="092" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404265" attr-that="Poins Mall" attr-that-cd="092" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404268" attr-that="Poins Mall" attr-that-cd="092" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404266" attr-that="Poins Mall" attr-that-cd="092" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/038/2023-05-22">Metro Indah Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390642" attr-that="Metro Indah Mall" attr-that-cd="038" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390643" attr-that="Metro Indah Mall" attr-that-cd="038" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390644" attr-that="Metro Indah Mall" attr-that-cd="038" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390645" attr-that="Metro Indah Mall" attr-that-cd="038" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/005/2023-05-22">Teras Kota</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 7</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403406" attr-that="Teras Kota" attr-that-cd="005" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:10</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403407" attr-that="Teras Kota" attr-that-cd="005" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389866" attr-that="Teras Kota" attr-that-cd="005" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389867" attr-that="Teras Kota" attr-that-cd="005" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389868" attr-that="Teras Kota" attr-that-cd="005" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:40</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/002/2023-05-22">Grand Indonesia</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391415" attr-that="Grand Indonesia" attr-that-cd="002" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391416" attr-that="Grand Indonesia" attr-that-cd="002" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391417" attr-that="Grand Indonesia" attr-that-cd="002" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404204" attr-that="Grand Indonesia" attr-that-cd="002" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400640" attr-that="Grand Indonesia" attr-that-cd="002" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/070/2023-05-22">Wijaya Kusuma</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403288" attr-that="Wijaya Kusuma" attr-that-cd="070" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403290" attr-that="Wijaya Kusuma" attr-that-cd="070" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403291" attr-that="Wijaya Kusuma" attr-that-cd="070" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:25</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/034/2023-05-22">Transmart Mataram</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403194" attr-that="Transmart Mataram" attr-that-cd="034" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403666" attr-that="Transmart Mataram" attr-that-cd="034" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:10</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403668" attr-that="Transmart Mataram" attr-that-cd="034" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/056/2023-05-22">Cikampek Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400601" attr-that="Cikampek Mall" attr-that-cd="056" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400605" attr-that="Cikampek Mall" attr-that-cd="056" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6400604" attr-that="Cikampek Mall" attr-that-cd="056" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/068/2023-05-22">Sunter Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389960" attr-that="Sunter Mall" attr-that-cd="068" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389961" attr-that="Sunter Mall" attr-that-cd="068" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:40</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/025/2023-05-22">Green Pramuka Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403536" attr-that="Green Pramuka Mall" attr-that-cd="025" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403580" attr-that="Green Pramuka Mall" attr-that-cd="025" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:55</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403581" attr-that="Green Pramuka Mall" attr-that-cd="025" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">20:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/035/2023-05-22">Transmart Cempaka Putih</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403956" attr-that="Transmart Cempaka Putih" attr-that-cd="035" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403953" attr-that="Transmart Cempaka Putih" attr-that-cd="035" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403954" attr-that="Transmart Cempaka Putih" attr-that-cd="035" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403955" attr-that="Transmart Cempaka Putih" attr-that-cd="035" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/057/2023-05-22">Park Avenue Batam</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6396629" attr-that="Park Avenue Batam" attr-that-cd="057" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:40</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6396628" attr-that="Park Avenue Batam" attr-that-cd="057" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403810" attr-that="Park Avenue Batam" attr-that-cd="057" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403811" attr-that="Park Avenue Batam" attr-that-cd="057" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/042/2023-05-22">Transmart Cirebon</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404183" attr-that="Transmart Cirebon" attr-that-cd="042" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404189" attr-that="Transmart Cirebon" attr-that-cd="042" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404184" attr-that="Transmart Cirebon" attr-that-cd="042" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/060/2023-05-22">Kings Shopping Center</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393975" attr-that="Kings Shopping Center" attr-that-cd="060" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6393989" attr-that="Kings Shopping Center" attr-that-cd="060" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/008/2023-05-22">Plaza Balikpapan</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403763" attr-that="Plaza Balikpapan" attr-that-cd="008" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">12:55</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387973" attr-that="Plaza Balikpapan" attr-that-cd="008" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:00</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/051/2023-05-22">Icon Mall Gresik</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387226" attr-that="Icon Mall Gresik" attr-that-cd="051" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387227" attr-that="Icon Mall Gresik" attr-that-cd="051" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:55</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387228" attr-that="Icon Mall Gresik" attr-that-cd="051" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404119" attr-that="Icon Mall Gresik" attr-that-cd="051" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/053/2023-05-22">Blitar Square</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390747" attr-that="Blitar Square" attr-that-cd="053" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:05</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6390745" attr-that="Blitar Square" attr-that-cd="053" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/089/2023-05-22">Mal Ciputra Tangerang</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6385008" attr-that="Mal Ciputra Tangerang" attr-that-cd="089" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/076/2023-05-22">Malang City Point</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387700" attr-that="Malang City Point" attr-that-cd="076" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:15</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6387701" attr-that="Malang City Point" attr-that-cd="076" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:10</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/022/2023-05-22">Ecoplaza Citraraya Cikupa</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 7</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6388389" attr-that="Ecoplaza Citraraya Cikupa" attr-that-cd="022" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:20</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404042" attr-that="Ecoplaza Citraraya Cikupa" attr-that-cd="022" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/094/2023-05-22">Ecoplaza Citra Maja Raya</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403682" attr-that="Ecoplaza Citra Maja Raya" attr-that-cd="094" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:30</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403681" attr-that="Ecoplaza Citra Maja Raya" attr-that-cd="094" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:55</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/048/2023-05-22">BG Junction</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403742" attr-that="BG Junction" attr-that-cd="048" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403750" attr-that="BG Junction" attr-that-cd="048" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:35</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403741" attr-that="BG Junction" attr-that-cd="048" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:40</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/066/2023-05-22">Plaza Lawu Madiun</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401472" attr-that="Plaza Lawu Madiun" attr-that-cd="066" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:45</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401475" attr-that="Plaza Lawu Madiun" attr-that-cd="066" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:25</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401469" attr-that="Plaza Lawu Madiun" attr-that-cd="066" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/023/2023-05-22">Sunrise Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403357" attr-that="Sunrise Mall" attr-that-cd="023" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:50</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403359" attr-that="Sunrise Mall" attr-that-cd="023" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">19:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/077/2023-05-22">Roxy Square Jember</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391516" attr-that="Roxy Square Jember" attr-that-cd="077" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">13:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391953" attr-that="Roxy Square Jember" attr-that-cd="077" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:05</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391518" attr-that="Roxy Square Jember" attr-that-cd="077" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">19:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/072/2023-05-22">Panakkukang Square</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404537" attr-that="Panakkukang Square" attr-that-cd="072" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">14:15</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/055/2023-05-22">Plaza Mulia</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6389228" attr-that="Plaza Mulia" attr-that-cd="055" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:05</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/032/2023-05-22">Transmart Tegal</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 5</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404448" attr-that="Transmart Tegal" attr-that-cd="032" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:20</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/019/2023-05-22">Festive Walk</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 3</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403828" attr-that="Festive Walk" attr-that-cd="019" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">15:35</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403829" attr-that="Festive Walk" attr-that-cd="019" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:20</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/079/2023-05-22">Raya Padang</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6399914" attr-that="Raya Padang" attr-that-cd="079" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:00</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6399916" attr-that="Raya Padang" attr-that-cd="079" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:05</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/088/2023-05-22">Studio Pekanbaru</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6391261" attr-that="Studio Pekanbaru" attr-that-cd="088" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">16:25</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/015/2023-05-22">Bandara City Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 2</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6395220" attr-that="Bandara City Mall" attr-that-cd="015" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:05</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/071/2023-05-22">Grand Batam Mall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 6</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6404540" attr-that="Grand Batam Mall" attr-that-cd="071" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">17:20</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/059/2023-05-22">Sadang Terminal Square</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6385183" attr-that="Sadang Terminal Square" attr-that-cd="059" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:05</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/086/2023-05-22">Buaran Plaza</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401525" attr-that="Buaran Plaza" attr-that-cd="086" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:30</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/080/2023-05-22">Grand Batavia</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6401349" attr-that="Grand Batavia" attr-that-cd="080" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">18:45</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/026/2023-05-22">Rita Supermall</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 4</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6396788" attr-that="Rita Supermall" attr-that-cd="026" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">19:50</a>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <div class="schedule-title"><a href="https://www.cgv.id/en/schedule/cinema/033/2023-05-22">Transmart Pekanbaru</a> <span>GUARDIANS OF THE GALAXY VOL. 3 / ACTION / 150 Minutes / On screen since 03 May 2023</span></div>
                                        <ul>
                                            <li class="schedule-type">
                                                <i class="fa fa-caret-right"></i> 2D <span class="audi-nm">Audi 1</span>
                                            </li>
                                            <li>
                                                <ul class="showtime-lists">
                                                    <li>
                                                        <a href="javascript:void(0);" class="active" id="6403147" attr-that="Transmart Pekanbaru" attr-that-cd="033" attr-mov="GUARDIANS OF THE GALAXY VOL. 3" attr-fmt="2D">21:20</a>
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
                            <font>SUMMARY :</font> Location: <span id="sum-location">-</span> | Date: <span id="sum-showdate">Mon, 22 May 2023</span><br />
                            Movie: <span id="sum-movie">GUARDIANS OF THE GALAXY VOL. 3</span> | Class: <span id="sum-suite">-</span> | Time: <span id="sum-showtime">-</span>
                        </div>
                        <form action="" method="get">
                            <input type="hidden" name="showdate" value="2023-05-22" />
                            <input type="hidden" name="cinema" value="" />
                            <input type="submit" value="PICK YOUR SEATS" disabled />
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>