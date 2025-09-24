@extends('layout')
@section('title', 'Бүртгүүлэх')
@section('content')
<div class="main_slide" id="home">
    <div class="section_container">
        <div class="slide_content">
            <div class="grid grid_col4 grid_logo gap2">
                <div class="img_block"><img src="/images/moh.png" alt=""></div>
                <div class="img_block"><img src="/images/nctm_logo.png" alt=""></div>
                <div class="img_block"><img src="/images/nurses_association.png" alt=""></div>
                <div class="img_block"><img src="/images/ISBT_logo.png" alt=""></div>
            </div>
            <h1>The first national congress of blood service nurses</h1>
            <div class="dcsb">
                <h5><i class="fa fa-calendar-check"></i>25 - 26 September 2025</h5>
                <h5>National Center for Transfusion Medicine</h5>
                <h5><i class="fa fa-location-arrow"></i>Ulaanbaatar, Mongolia</h5>
            </div>
        </div>
    </div>
</div>
<div class="section_container">
    <div class="section_line" id="invitation">
        <h2 class="title">Invitation letter for the first national workshop of blood service nurses</h2>
        <div class="content_text invitation">
            <ul>
                <li>Date: September 25-26, 2025</li>
                <li>Location: Ulaanbaatar, Mongolia</li>
                <li>Esteemed Colleagues,</li>
            </ul>
            <p>It is our distinct pleasure to invite you to the First Congress of Blood Service Nurses, a historic event designed to celebrate and advance the critical role you play within Mongolia&#39;s healthcare system. Blood transfusion medicine is a highly specialized and essential component of healthcare, demanding continuous education, professional development, and the adoption of cutting-edge practices to ensure the highest standards of patient care and blood safety.</p>
            <p>We recognize the unique challenges faced by nurses working in remote and regional blood service centers, where opportunities for ongoing professional training and skills enhancement can be limited. Most of you, having graduated five to ten years ago, encounter significant barriers to regularly updating your knowledge and technical skills to align with contemporary advancements in blood transfusion technologies and methodologies.</p>
            <p>This Workshop has been carefully designed to address these challenges, offering a comprehensive platform for learning, skill enhancement, and collaborative interaction. The event will feature leading experts and practical training sessions aimed at equipping you with the latest innovations and best practices in blood transfusion medicine. It also provides an excellent opportunity for professional networking, exchanging valuable insights, and collectively identifying strategies to overcome common challenges.</p>
            <p>We strongly encourage your active participation, as your involvement will be instrumental in shaping the future direction of blood services across our nation. Together, let us harness the power of collaboration and shared expertise to elevate standards and foster sustainable improvements within our vital healthcare field.</p>
            <p>We eagerly await your presence and active engagement in what promises to be a transformative and empowering congress.</p>
            <p>With warm regards,</p>
            <ul>
                <li>Dr. NARANTUYA Bayarmagnai Ph.D</li>
                <li>Director, National Center for Transfusion Medicine, Ministry of Health</li>
                <li>Tel:  +976-99114034</li>
                <li>Fax: +976-70112857</li>
            </ul>
        </div>
    </div>
</div>
<div class="section_container">
    <div class="section_line" id="program">
        <h2 class="title">Program</h2>
        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
            <li>
                <a class="nav-link active" id="nav-25-tab" data-bs-toggle="tab" data-bs-target="#nav-25" type="button" role="tab" aria-controls="nav-25" aria-selected="true">September 25, 2025</a>
            </li>
            <li>
                <a class="nav-link" id="nav-26-tab" data-bs-toggle="tab" data-bs-target="#nav-26" type="button" role="tab" aria-controls="nav-26" aria-selected="false">September 26, 2025</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-25" role="tabpanel" aria-labelledby="nav-25-tab">
                <h1>Millennium Plaza</h1>
                <div class="table_wrap">
                    <table class="table_content">
                        <thead>
                            <tr>
                                <th colspan="3">Part I: Opening Ceremony</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="100">08<sup>30</sup> - 09<sup>00</sup></td>
                                <td>Registration</td>
                                <td>Training and Project Officer, G. Batzolboo</td>
                            </tr>
                            <tr>
                                <td>09<sup>00</sup> - 09<sup>10</sup></td>
                                <td>Opening Speech</td>
                                <td>Dr. B. Narantuya, Director General of the National Center for Transfusion Medicine</td>
                            </tr>
                            <tr>
                                <td>09<sup>10</sup> - 09<sup>30</sup></td>
                                <td>Group Photo Session</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th colspan="3">Part II: Current Status and Development of the Transfusion Medicine in Mongolia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09<sup>30</sup> - 10<sup>00</sup></td>
                                <td>Current Status and Future Directions of the Blood Service</td>
                                <td>Dr. B. Narantuya, Director General of the National Center for Transfusion Medicine</td>
                            </tr>
                            <tr>
                                <td>10<sup>00</sup> - 10<sup>20</sup></td>
                                <td>Operations, Procedures, Documentation, Monitoring, Evaluation, and Risk Assessment in the Blood Service</td>
                                <td>Head of Quality Management Department, Dr. E. Tungalagtuya</td>
                            </tr>
                            <tr>
                                <td>10<sup>20</sup> - 10<sup>40</sup></td>
                                <td>Donor Alertness and Awareness</td>
                                <td>Head of Donor Development Department Dr.B. Ijilbaatar</td>
                            </tr>
                            <tr>
                                <td>10<sup>40</sup> - 11<sup>00</sup></td>
                                <td>Collaboration with Government and Non-government Organizations, Donor Motivation and Recognition</td>
                                <td>Marketing and Public Health Specialist, D. Dulmaa</td>
                            </tr>
                            <tr>
                                <td>11<sup>00</sup> - 11<sup>20</sup></td>
                                <td>Laboratory Testing Specifics and Key Considerations</td>
                                <td>Head of Integrated Laboratory, Dr. M. Tserendejid</td>
                            </tr>
                            <tr class="gray_bg">
                                <td>11<sup>20</sup> - 11<sup>40</sup></td>
                                <td colspan="2">Q&amp;A and Discussion</td>
                            </tr>
                            <tr class="gray_bg">
                                <td>11<sup>40</sup> - 12<sup>40</sup></td>
                                <td colspan="2">Lunch Break</td>
                            </tr>
                            <tr>
                                <td>12<sup>40</sup> - 13<sup>00</sup></td>
                                <td>Specifics of Blood Service Nursing Professionals</td>
                                <td>Nurse Enkhtuya, Khovd Province Blood Center</td>
                            </tr>
                            <tr>
                                <td>13<sup>00</sup> - 13<sup>30</sup></td>
                                <td>Comparative Study of Donor Selection Criteria in Asian Blood Centers</td>
                                <td>Head of Research and Information technology Department, Dr. L. Enkhchimeg</td>
                            </tr>
                            <tr>
                                <td>13<sup>30</sup> - 13<sup>50</sup></td>
                                <td>Current Status and Future Outlook of Nursing Services in the Blood Service</td>
                                <td>Head of Nursing Department J. Narmandakh</td>
                            </tr>
                            <tr>
                                <td>13<sup>50</sup> - 14<sup>10</sup></td>
                                <td>Analysis of Blood Center Operational Reports</td>
                                <td>Economist-Statistician, L. Unurbayar</td>
                            </tr>
                            <tr class="gray_bg">
                                <td>14<sup>10</sup> - 14<sup>30</sup></td>
                                <td colspan="2">Q&A and Discussion</td>
                            </tr>
                            <tr class="gray_bg">
                                <td>14<sup>30</sup> - 14<sup>50</sup></td>
                                <td colspan="2">Tea Break</td>
                            </tr>
                            <tr>
                                <td>14<sup>50</sup> - 15<sup>10</sup></td>
                                <td>Best Practices in Blood Component Production</td>
                                <td>Head of Blood Production Department Dr. B. Orgil</td>
                            </tr>
                            <tr>
                                <td>15<sup>10</sup> - 15<sup>30</sup></td>
                                <td>Equipment Maintenance, Servicing</td>
                                <td>Head of Technology Department B. Dodgalsan</td>
                            </tr>
                            <tr>
                                <td>15<sup>30</sup> - 15<sup>50</sup></td>
                                <td>Use of the Core Operations Software in Blood Service</td>
                                <td>IT Engineer, Ch. Dalaiceren</td>
                            </tr>
                            <tr class="gray_bg">
                                <td>15<sup>30</sup> - 16<sup>30</sup></td>
                                <td colspan="2">Q&A and Discussion</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab">
                <h1>National Center for Transfusion Medicine</h1>
                <div class="table_wrap">
                    <table class="table_content">
                        <thead>
                            <tr>
                                <th colspan="11">Part III: Achievements in the Blood Sector and Collaboration (Practical Training)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td width="100">08<sup>30</sup> - 09<sup>00</sup></td>
                                <td>Registration</td>
                                <td colspan="8">Training and Project Officer, G. Batzolboo</td>
                            </tr>
                            <tr class="gray_bg">
                                <td></td>
                                <td>Duration</td>
                                <td></td>
                                <td>Moderator</td>
                                <td>09<sup>00</sup> - 10<sup>00</sup></td>
                                <td>10<sup>10</sup> - 10<sup>20</sup></td>
                                <td>10<sup>20</sup> - 11<sup>20</sup></td>
                                <td>11<sup>30</sup> - 12<sup>30</sup></td>
                                <td>12<sup>30</sup> - 13<sup>30</sup></td>
                                <td>13<sup>30</sup> - 14<sup>30</sup></td>
                                <td>14<sup>30</sup> - 15<sup>00</sup></td>
                            </tr>
                            <tr class="bg_lblue">
                                <td rowspan="3" class="txc">Donor Spot_1</td>
                                <td>20 min</td>
                                <td>One-time kit usage during blood collection</td>
                                <td rowspan="3" class="txc">Tech Nurse E. Dashgarav (1st floor, BZ Blood Collection Center)</td>
                                <td rowspan="3" class="txc">A group</td>
                                <td rowspan="10" class="txrl gray_bg">Coffee break</td>
                                <td rowspan="3" class="txc">B group</td>
                                <td rowspan="3" class="txc">C group</td>
                                <td rowspan="10" class="txrl gray_bg">Lunch</td>
                                <td rowspan="3" class="txc">D group</td>
                                <td rowspan="10" class="txrl gray_bg">Closing Remarks</td>
                            </tr>
                            <tr class="bg_lblue">
                                <td class="border_left">20 min</td>
                                <td>Blood and product sample collection for testing – Quality Control Lab</td>
                            </tr>
                            <tr class="bg_lblue">
                                <td class="border_left">20 min</td>
                                <td>Practice on PCS machine for plasma collection</td>
                            </tr>
                            <tr class="bg_orange">
                                <td rowspan="3" class="txc">Lab Spot_2</td>
                                <td>20 min</td>
                                <td>Practice on Blood Typing Techniques (Forward and Reverse)</td>
                                <td rowspan="3" class="txc">Senior Lab Technician D. Oyunbold (2nd floor, BZ Blood Collection Center, Integrated Lab)</td>
                                <td rowspan="3" class="txc">B group</td>
                                <td rowspan="3" class="txc">C group</td>
                                <td rowspan="3" class="txc">D group</td>
                                <td rowspan="3" class="txc">A group</td>
                            </tr>
                            <tr class="bg_orange">
                                <td class="border_left">20 min</td>
                                <td>Practice on Determining Donor Rh, Rh Subgroups, and Kell Types</td>
                            </tr class="bg_orange">
                            <tr class="bg_orange">
                                <td class="border_left">20 min</td>
                                <td>Usage of a Hemoglobinmeter to Measure Hemoglobin levels</td>
                            </tr>
                            <tr class="bg_lgreen">
                                <td rowspan="2" class="txc">Product Spot_3</td>
                                <td>30 min</td>
                                <td>Blood Component Production practice</td>
                                <td rowspan="2" class="txc">Tech Nurse B.Unurtsetseg (2nd floor, BZ Blood Collection Center,  of Blood Production Department)</td>
                                <td rowspan="2" class="txc">C group</td>
                                <td rowspan="2" class="txc">D group</td>
                                <td rowspan="2" class="txc">A group</td>
                                <td rowspan="2" class="txc">B group</td>
                            </tr>
                            <tr class="bg_lgreen">
                                <td class="border_left">30 min</td>
                                <td>Storage, Transport of Blood product/ Pathogen Reduction and Irradiation of Blood Components</td>
                            </tr>
                            <tr class="bg_lpink">
                                <td rowspan="2" class="txc">Software Spot_4</td>
                                <td>30 min</td>
                                <td>Core Operations Software usage for Blood product Information, and Distribution</td>
                                <td>Head of Blood Production Department Dr. B.Orgil (Room 104)</td>
                                <td rowspan="2" class="txc">D group</td>
                                <td rowspan="2" class="txc">A group</td>
                                <td rowspan="2" class="txc">B group</td>
                                <td rowspan="2" class="txc">C group</td>
                            </tr>
                            <tr class="bg_lpink">
                                <td class="border_left">30 min</td>
                                <td>Entering QC Test Data in Core Operations Software</td>
                                <td>IT Engineer, Ch.Dalaiceren (Room 104)</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section_container">
    <div class="section_line" id="speakers">
        <h2 class="title">Speakers</h2>
        <div class="skeaper_items grid grid_col5 gap2">
            <div class="speaker_item">
                <div class="img_block"><img src="images/T.Alimaa.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr T.Alimaa</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/N.Khaliun.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. N.Khaliun</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/M.Tserendejid.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. M.Tserendejid</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/J.Narmandakh.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. J.Narmandakh</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/L.Enkhchimeg.jpg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. L.Enkhchimeg</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/Ch.Dalaitseren.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>IT Ch.Dalaitseren</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/E.Tungalagtuya.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. E.Tungalagtuya</h3>
                </div>
            </div>
            <div class="speaker_item">
                <div class="img_block"><img src="images/B.Orgil.jpeg" alt=""></div>
                <div class="speaker_desc">
                    <h3>Dr. B.Orgil</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection