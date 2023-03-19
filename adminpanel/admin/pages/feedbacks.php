<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
<div class="app-main__outer">
        <div class="app-main__inner">
                <div class="app-page-title">
                    <marquee onmouseover="this.stop()" onmouseout="this.start()">Hello <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> family. The sole owner of this code is <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>. So it is not suitable for any commercial purpose or sale. So you will be instructed to use it for education. And you can message or <a href="https://api.whatsapp.com/send/?phone=01608445456&amp;text&amp;type=phone_number&amp;app_absent=0">WhatsApp</a> to do any kind of project. Also, don't forget to <a href="https://www.youtube.com/@codecampbdofficial">Subscrib</a> to our channel to get all our new videos.</marquee>
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>RANKING BY EXAM</b></div>
                    </div>
                </div>
                </div> 

                 <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Feedback's List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4" width="20%">Examinee</th>
                                <th class="text-left ">Feedbacks</th>
                                <th class="text-center" width="15%">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM feedbacks_tbl ORDER BY fb_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['fb_exmne_as']; ?></td>
                                            <td><?php echo $selExamRow['fb_feedbacks']; ?></td>
                                            <td><?php echo $selExamRow['fb_date']; ?></td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Feedback found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
                    
     
      
        
</div>
         


















<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->