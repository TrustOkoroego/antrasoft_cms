@extends('site.master')

@section('content')
<div style="margin-top: 0px;" class="page-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active"><a href="{{URL::to('/')}}/about">About Us</a> </li>
                    <li class="active"><a href="{{URL::to('/')}}/ourteam">Our Team</a> </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section style="margin-top: 0px;" class="main-container">

    <div class="container">
        <div class="row">
            <h1><i class="fa fa-users"></i> Our Team</h1>
            <div class="separator-2"></div>
            <div class="main col-md-12" style="margin-bottom: 20px">
                <div class="col-md-4">
                <img src="{{URL::to('/')}}/site/images/dr_ebri.jpg" style="padding: 5px;border: thin solid #EEEEEE" />
                </div>
                <div class="col-md-8">
                    <h2>Dr. EBRI E. WILLIE</h2>
                    <p>Quality Control, Training, Mentoring and Professional Service Management with
                    seventeen (17) years working experience of which ten (10) years were in Public service, as a Tax Administrator in Federal Inland Revenue Service – FIRS, Three (3) years with a tax and management consulting firm, and six (6) years as the Logistics/Procurement Specialist/manager for a Multinational Organization (Lafarge Group) UNICEM.
                    </p>
                    <p>
                    <ul>
                    <li>Ph.D (Business Administration)</li>
                    <li>Fellow, Institute of Professional Financial Managers FIPFM UK.</li>
                    <li>Fellow, Certified Public Accountant – FCPA UK.</li>
                    <li>Fellow, Institute of Financial Consultant FIFC Canada/USA.</li>
                    <li>Member of the Chartered Institute of Taxation of Nigeria – ACTI.</li>
                    <li>A Masters Degree in Management - MBA (Major in Finance).</li>
                    </ul>
                    </p>
                </div>
            </div>

            <div class="main col-md-12" style="margin-bottom: 20px">
                <div class="col-md-4">
                    <img src="{{URL::to('/')}}/site/images/busari.jpg" style="padding: 5px;border: thin solid #EEEEEE" />
                </div>
                <div class="col-md-8">
                    <h2>Dr. BUSARI SHAAMSUDDEEN A. PhD, CIFE, CMA, DFPFM, CPFA</h2>
                    <p>He is non Interest Finance Expert with adequate professional knowledge. He has held positions as;</p>
                    <p>
                    <ul>
                        <li>Advisory Council Member For Africa; The International Management Certification Boards USA - August 2014 – Present (4 months) USA</li>
                        <li>African Council Member The Institute Of Professional Financial Managers London - January 2014 – Present (11 months) AFRICA</li>
                        <li>FOUNDER, NON INTEREST BANKING SCHOOL - February 2012 – Present (2 years 10 months) NIGERIA, organizing non interest finance seminars and education to corporate firms and professionals in business</li>
                        <li>REGISTRAR/CHIEF EXECUTIVE THE ISLAMIC INSTITUTE OF ACCOUNTING AND FINANCE OF NIGERIA March 2011 – Present (3 years 9 months) KWARA, NIGERIA</li>
                        <li>COST MANAGEMENT ACCOUNTANT VANGUARD ASSOCIATES NIGERIA LTD - May 2002 December 2008 (6 years 8 months)</li>
                    </ul>
                    </p>
                </div>
            </div>


            <div class="main col-md-12" style="margin-bottom: 20px">
                <div class="col-md-4">
                    <img src="{{URL::to('/')}}/site/images/chief.jpg" style="padding: 5px;border: thin solid #EEEEEE" />
                </div>
                <div class="col-md-8">
                    <h2>DOUBLE CHIEF AUSTIN TAM DORGU</h2>
                    <p>Double Chief Austin Tam Dorgu is our technical consultant on Maritime Academy. He is a professional
                        in Maritime Logistics and with vast technical knowledge in ship management and technology. Double
                        chief has over twenty five (25) years of practical experience in the stated areas and is a graduate
                        of Edison Chouest offshore Academy where he obtained a Higher Diploma Certificate in Ship Welding and
                        Construction. He has worked with the Edison Chouest Offshore support team, which supports the majority
                        of the U.S. Gulf deepwater operations and which is today an expanding global market with its fleet
                        of highly specialized new generation offshore service and supply vessels.</p>
                    <p>
                    <ul>
                        <li>
                            Higher Diploma Certificate in Ship Welding and Construction
                        </li>

                    </ul>
                    </p>
                </div>
            </div>


            <div class="main col-md-12" style="margin-bottom: 20px">
                <div class="col-md-4">
                    <img src="{{URL::to('/')}}/site/images/owuna.jpg" style="padding: 5px;border: thin solid #EEEEEE" />
                </div>
                <div class="col-md-8">
                    <h2>MR. ORUBIB IOWUNA S.D</h2>
                    <p>Mr. Orubib Iowuna S.D has Seventeen (18) years working experience, all in Public Service with Federal
                        Inland Revenue Service as a Tax Administrator. The Business ethics/Technical Consultant,
                        has the following educational Certificate and background;</p>
                    <p>
                    <ul>
                        <li>Member of the Chartered Institute of Taxation of Nigeria – ACTI</li>
                        <li>Masters Degree in Business Management – MBA</li>
                        <li>B.SC Banking/Finance</li>

                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop