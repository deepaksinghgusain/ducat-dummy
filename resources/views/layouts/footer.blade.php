@inject('modelHelper', '\App\Helper\ModelHelper')

<div id="ouibounce-modal">

</div>
<section id="offices">

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-xl-12 text-center">
                <div class="officesList blueColor">
                    <h3 class="mb-3"><span class="orangeColor">Ducat:</span> 70-70-90-50-90</h3>
                    <h5>
                        <span class="orangeColor">Sector 16,Noida</span> -
                        <span class="orangeColor">Sector 63,Noida</span> -
                        <span class="orangeColor">Ghaziabad</span> -
                        <span class="orangeColor">SOUTH EX.</span> -
                        <span class="orangeColor">PITAMPURA</span> -
                        <span class="orangeColor">Gurugram</span>
                    </h5>
                </div>
            </div> <!-- End of COL XL 8 -->

        </div> <!-- End of ROW -->

    </div> <!-- End of Container -->

</section> <!-- End of Offices -->
<section id="eventGallery" class="section-padding lightBGColor pb-2">

    <div class="container">

        <div class="row justify-content-md-center d-none">

            <div class="col-xl-8 text-center">

                <div class="headingStyle">

                    <h2>Events Gallery</h2>
                    <div class="sep"><img src="/images/icon.png" alt="Icon"></div>
                    <p>Ducat provides the best available programs which helps in enhancing the technical skills
                        which seems to be beneficial for all the applicants.</p>

                </div>

            </div> <!-- End of COL XL 8 -->

        </div> <!-- End of ROW -->

        <div class="row">

            <div class="col-xl-12 text-center">

                <div class="eventGallery owl-theme owl-carousel">
                    @php $i=0;@endphp
                    @foreach ($modelHelper->getGalleries() as $image)
                        @php $i++;@endphp
                        @if ($i <= 10)
                            <a href="{{ asset($image->image) }}" data-fancybox="eventGallery">
                                <img src="{{ asset($image->image) }}" alt="Ducat India Gallery"
                                    title="Ducat India Gallery">
                            </a>
                        @endif
                    @endforeach

                </div>

            </div> <!-- End of COL XL 12 -->

        </div> <!-- End of ROW -->

    </div> <!-- End of Container -->

</section> <!-- End of Relations -->

<footer id="footer">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <div class="tab footerTabs">

                    <ul class="tabs">
                        <li><a href="#">Training Gurugram</a></li>
                        <li><a href="#">Training Delhi</a></li>
                        <li><a href="#">Training Ghaziabad</a></li>
                        <li><a href="#">Training Setor 16,Noida</a></li>
                    </ul>

                    <div class="tab_content text-left">

                        <div class="tabs_item">

                            <div class="row">

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/python-training-course-in-gurgaon"
                                                title="Python Training Tourse in Gurgaon ">Python Training Course in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/java-training-course-in-gurgaon"
                                                title="Java Training Course in Gurgaon">Java Training Course in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/erp-sap-training-course-in-gurgaon"
                                                title="ERP SAP Training Course in Gurgaon">ERP SAP Training Course
                                                in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-course-in-gurgaon"
                                                title="Autocad Training Course in Gurgaon">Autocad Training Course
                                                in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/web-designing-training-course-in-gurgaon"
                                                title="Web Designing Training Course in Gurgaon">Web Designing
                                                Training Course in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/android-training-course-in-gurgaon"
                                                title="Android Training Course in Gurgaon">Android Training Course
                                                in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/ccna-training-course-in-gurgaon"
                                                title="CCNA Training Course in Gurgaon">CCNA Training Course in
                                                Gurgaon</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/aws-training-in-gurgaon"
                                                title="AWS Training in Gurgaon">AWS Training in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/azure-training-in-gurgaon"
                                                title="Azure Training in Gurgaon">Azure Training in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-in-gurgaon"
                                                title="Ethical Hacking Training in Gurgaon">Ethical Hacking Training
                                                in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/devops-training-course-in-gurgaon"
                                                title="Devops Training Course in Gurgaon">Devops Training Course in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/networking-training-course-in-gurgaon"
                                                title="Networking Training Course in Gurgaon">Networking Training
                                                Course in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/software-testing-training-course-in-gurgaon"
                                                title="Software testing Training Course in Gurgaon">Software testing
                                                Training Course in Gurgaon</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>

                                        <li><a href="https://www.ducatindia.com/3dstudio-max-training-in-gurgaon"
                                                title="3Dstudio Max Training in Gurgaon">3Dstudio Max Training in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/solidworks-training-institute-in-gurgaon"
                                                title="Solidworks Training Institute in Gurgaon">Solidworks Training
                                                Institute in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/catia-training-institute-in-gurgaon"
                                                title="Catia Training Institute in Gurgaon">Catia Training Institute
                                                in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/revit-architecture-training-in-gurgaon"
                                                title="Revit Architecture Training in Gurgaon">Revit Architecture
                                                Training in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/staad-pro-training-in-gurgaon"
                                                title="Staad Pro Training in Gurgaon">Staad Pro Training in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/creo-training-in-gurgaon"
                                                title="CREO Training in Gurgaon">CREO Training in Gurgaon</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/vray-training-in-gurgaon"
                                                title="VRAY Training in Gurgaon">VRAY Training in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/ansys-training-in-gurgaon"
                                                title="ANSYS Training in Gurgaon">ANSYS Training in Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/mcsa-training-course-in-gurgaon"
                                                title="MCSA Training Course in Gurgaon">MCSA Training Course in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/ccnp-training-course-in-gurgaon"
                                                class="CCNP Training Course in Gurgaon">CCNP Training Course in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/salesforce-training-course-in-gurgaon"
                                                title="Salesforce Training in Gurgaon">Salesforce Training in
                                                Gurgaon</a></li>
                                        <li><a href="https://www.ducatindia.com/ccnp-routing-switching-training-in-gurgaon"
                                                title="CCNP Routing Training in Gurgaon">CCNP Routing Training in
                                                Gurgaon</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                            </div> <!-- End of ROW -->

                        </div>

                        <div class="tabs_item">

                            <div class="row">

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/web-designing-training-course-in-delhi"
                                                title="Web Designing Training Course in Delhi">Web Designing
                                                Training Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/digital-marketing-training-course-in-delhi"
                                                title="Digital Marketing Training Course in Delhi">Digital
                                                Marketing Training Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/python-training-course-in-delhi"
                                                title="Python Training Course in Delhi">Python Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/java-training-course-in-delhi"
                                                title="Java Training Course in Delhi">Java Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/data-analytics-training-in-delhi"
                                                title="Data Analytics Training in Delhi">Data Analytics Training in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/azure-training-course-in-delhi"
                                                title="Azure Training Course in Delhi">Azure Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/machine-learning-training-course-in-delhi"
                                                title="Machine Learning Training Course in Delhi">Machine Learning
                                                Training Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/aws-training-course-in-delhi"
                                                title="AWS Training Course in Delhi">AWS Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/linux-training-course-in-delhi"
                                                title="Linux Training Course in Delhi">Linux Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/salesforce-training-course-in-delhi"
                                                title="Salesforce Training Course in Delhi">Salesforce Training
                                                Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-course-in-delhi"
                                                title="AutoCAD Training Course in Delhi">AutoCAD Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/software-testing-training-course-in-delhi"
                                                title="Software Testing Training Course in Delhi">Software Testing
                                                Training Course in Delhi</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-course-in-delhi"
                                                title="Ethical Hacking Training Course in Delhi">Ethical Hacking
                                                Training Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/android-training-course-in-delhi"
                                                title="Android Training Course in Delhi">Android Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/data-science-training-in-delhi"
                                                title="Data Science Training Course in Delhi">Data Science Training
                                                Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/erp-sap-training-course-in-delhi"
                                                title="ERP SAP Training Course in Delhi">ERP SAP Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/php-training-course-in-delhi"
                                                title="PHP Training Course in Delhi">PHP Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/big-data-training-course-in-delhi"
                                                title="Big Data Training Course in Delhi">Big Data Training Course
                                                in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/devops-training-course-in-delhi"
                                                title="Devops Training Course in Delhi">Devops Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/artificial-intelligence-training-in-delhi"
                                                title="Artificial Intelligence Training Course in Delhi">Artificial
                                                Intelligence Training Course in Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/cloud-computing-training-course-in-pitampura"
                                                title="Cloud Computing Training Course in Pitampura">Cloud
                                                Computing Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/software-testing-training-course-in-pitampura"
                                                title="Software Testing Training Course in Pitampura">Software
                                                Testing Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/azure-training-course-in-pitampura"
                                                title="Azure Training Course in Pitampura">Azure Training Course in
                                                Pitampura</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/aws-training-course-in-delhi"
                                                title="AWS Training Course in Delhi">AWS Training Course in
                                                Delhi</a></li>
                                        <li><a href="https://www.ducatindia.com/aws-training-course-in-pitampura"
                                                title="AWS Training Course in Pitampura">AWS Training Course in
                                                Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-course-in-pitampura"
                                                title="Ethical Hacking Training Course in Pitampura">Ethical
                                                Hacking Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-course-in-pitampura"
                                                title="Autocad Training Training Course in Pitampura">Autocad
                                                Training Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/web-designing-training-course-in-pitampura"
                                                title="Web Designing Training Course in Pitampura">Web Designing
                                                Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/data-science-training-in-pitampura"
                                                title="Data Science Training Course in Pitampura">Data Science
                                                Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/artificial-intelligence-training-in-pitampura"
                                                title="Artificial Intelligence Training Course in Pitampura">Artificial
                                                Intelligence Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/php-training-course-in-pitampura"
                                                title="PHP Training Course in Pitampura">PHP Training Course in
                                                Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/android-training-course-in-pitampura"
                                                title="Android Training Course in Pitampura">Android Training
                                                Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/java-training-course-in-pitampura"
                                                title="Java Training Course in Pitampura">Java Training Course in
                                                Pitampura</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/python-training-course-in-pitampura"
                                                title="Python Training Course in Pitampura">Python Training Course
                                                in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/digital-marketing-training-course-in-pitampura"
                                                title="AI Marketing Training Course in Pitampura">AI Marketing
                                                Training Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/erp-sap-training-course-in-pitampura"
                                                title="ERP SAP Training Course in Pitampura">ERP SAP Training
                                                Course in Pitampura</a></li>
                                        <li><a href="https://www.ducatindia.com/software-testing-training-course-in-south-extension"
                                                title="Software Testing Training Course in South Extension">Software
                                                Testing Training Course in South Extension</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-course-in-south-extension"
                                                title="AutoCAD Training Course in South Extension">AutoCAD Training
                                                Course in South Extension</a></li>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-in-south-extension"
                                                title="Ethical Hacking Training Course in South Extension">Ethical
                                                Hacking Training Course in South Extension</a></li>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-course-in-south-extension"
                                                title="AI Hacking Training Course in South Extension">AI Hacking
                                                Training Course in South Extension</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-in-south-extension"
                                                title="AutoCAD Training Course in South Extension">AutoCAD Training
                                                Course in South Extension</a></li>
                                        <li><a href="https://www.ducatindia.com/web-designing-training-course-in-south-extension"
                                                title="Web Designing Training Course in South Extension">Web
                                                Designing Training Course in South Extension</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                            </div> <!-- End of ROW -->

                        </div>

                        <div class="tabs_item">

                            <div class="row">

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/ethical-hacking-training-course-in-ghaziabad"
                                                title="Ethical Hacking Training Course in Ghaziabad">Ethical
                                                Hacking Training Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/salesforce-lightning-in-ghaziabad"
                                                title="Salesforce Lightning in Ghaziabad">Salesforce Lightning in
                                                Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/data-science-training-in-ghaziabad"
                                                title="Data Science Training Course in Ghaziabad">Data Science
                                                Training Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/artificial-intelligence-training-in-ghaziabad"
                                                title="Artificial Intelligence Training Course in Ghaziabad">Artificial
                                                Intelligence Training Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/ccna-training-course-in-ghaziabad"
                                                title="CCNA Training Course in Ghaziabad">CCNA Training Course in
                                                Ghaziabad</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/php-training-course-in-ghaziabad"
                                                title="PHP Training Course in Ghaziabad">PHP Training Course in
                                                Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/software-testing-training-course-in-ghaziabad"
                                                title="Software Training Course in Ghaziabad">Software Training
                                                Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/autocad-training-course-in-ghaziabad"
                                                title="AutoCAD Training Course in Ghaziabad">AutoCAD Training
                                                Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/web-designing-training-course-in-ghaziabad"
                                                title="Web Designing Training Course in Ghaziabad">Web Designing
                                                Training Course in Ghaziabad</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/networking-training-course-in-ghaziabad"
                                                title="Networking Training Course in Ghaziabad">Networking Training
                                                Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/android-training-course-in-ghaziabad"
                                                title="Android Training Course in Ghaziabad">Android Training
                                                Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/cloud-computing-training-course-in-ghaziabad"
                                                title="Clound Computing Training Course in Ghaziabad">Cloud
                                                Computing Training Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/dot-net-training-course-in-ghaziabad"
                                                title="Dot Net Training Course in Ghaziabad">Dot Net Training
                                                Course in Ghaziabad</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/erp-sap-training-course-in-ghaziabad"
                                                title="ERP SAP Training Course in Ghaziabad">ERP SAP Training
                                                Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/digital-marketing-training-course-in-ghaziabad"
                                                title="Digital Marketing Training Course in Ghaziabad">Digital
                                                Marketing Training Course in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/python-training-course-in-ghaziabad"
                                                title="Python Training Course in Ghaziabad">Python Training Course
                                                in Ghaziabad</a></li>
                                        <li><a href="https://www.ducatindia.com/java-training-course-in-ghaziabad"
                                                title="Java Training Course in Ghaziabad">Java Training Course in
                                                Ghaziabad</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                            </div> <!-- End of ROW -->

                        </div>

                        <div class="tabs_item">

                            <div class="row">

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/digital-marketing"
                                                title="Digital marketing Training Course in Noida">Digital
                                                marketing Training Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/javatraining/"
                                                title="JAVA Training Course in Noida">JAVA Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/phptraining/"
                                                title="PHP Training Course in Noida">PHP Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/pythontraining"
                                                title="Python Training Course in Noida">Python Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/autocadtraining"
                                                title="AutoCAD Training Course in Noida">AutoCAD Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/Best-sap-erp-training/"
                                                title="SAP Training Course in Noida">SAP Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/devopstraining/"
                                                title="DevOps Training Course in Noida">DevOps Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/awstraining"
                                                title="AWS Training Course in Noida">AWS Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/sqttraining"
                                                title="Software Testing Training Course in Noida">Software Testing
                                                Training Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/webdesigntraining"
                                                title="Web Designing Training Course in Noida">Web Designing
                                                Training Course in Noida</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/sqttraining"
                                                title="Testing Training Course in Noida">Testing Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/angular2training"
                                                title="Angular JS Training Course in Noida">Angular JS Training
                                                Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/reactjstraining"
                                                title="React js Training Course in Noida">React js Training Course
                                                in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/meantraining"
                                                title="Mean Stack training in Noida">Mean Stack training in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/ethicalhackingtraining"
                                                title="Ethical Hacking Training in Noida">Ethical Hacking Training
                                                in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/fullstack-with-nodejs"
                                                title="Node js training in Noida">Node js training in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/iphonetraining"
                                                title="I-PHONE training in Noida">I-PHONE training in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/merntraining"
                                                title="Mern Stack training in Noida">Mern Stack training in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/mistraining"
                                                title="MIS Training Course in Noida">MIS Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/fullstack-with-nodejs"
                                                title="Full Stack With Node js Training In Noida">Full Stack With
                                                Node js Training In Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/reactjstraining"
                                                title="React Native Training Course in Noida">React Native Training
                                                Course in Noida</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/data-science-training-in-noida"
                                                title="Data Science Training Course in Noida">Data Science Training
                                                Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/erp-crm"
                                                title="ERP CRM TRAINING IN NOIDA">ERP CRM TRAINING IN NOIDA</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/erp-fico"
                                                title="ERP FICO Training Course in Noida">ERP FICO Training Course
                                                in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/erpscmtraining"
                                                title="ERP SCM training in noida">ERP SCM training in noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/erp-hr"
                                                title="ERP HR Training Course in Noida">ERP HR Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/erp-mm"
                                                title="ERP MM Training Course in Noida">ERP MM Training Course in
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/machinelearningtraining"
                                                title="Machine Learning Training in Noida">Machine Learning
                                                Training in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/redhattraining"
                                                title="LINUX Training Institute In Noida">LINUX Training Institute
                                                In Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/graphicsdesigntraining"
                                                title="GRAPHICS DESIGNING Training Course in Noida">GRAPHICS
                                                DESIGNING Training Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/mcsatraining"
                                                title="MCSA Training Institute Noida">MCSA Training Institute
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/devopstraining"
                                                title="DevOps Training in Noida">DevOps Training in Noida</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                                <div class="col-xl-3">

                                    <ul>
                                        <li><a href="https://www.ducatindia.com/dotnetraining"
                                                title="Dot Net Training Course In Noida">Dot Net Training Course In
                                                Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/advancedmicrosoftexceltraining"
                                                title="Advanced Excel Training Course in Noida">Advanced Excel
                                                Training Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/oracle12cdbatraininginnoida"
                                                title="Oracle DBA Training Course in Noida">Oracle DBA Training
                                                Course in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/bigdatatraining"
                                                title="Big Data Training Course in Noida">Big Data Training Course
                                                in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/tableautraininginnoida"
                                                title="TABLEAU TRAINING in Noida">TABLEAU TRAINING in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/powerbitraininginnoida"
                                                title="Power BI Training in Noida">Power BI Training in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/microsoft-sql-server-training"
                                                title="SQL Training in Noida">SQL Training in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/blockchaintraining"
                                                title="Blockhain training in Noida">Blockhain training in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/artificial-intelligence-training-in-noida"
                                                title="AI Training in Noida">AI Training in Noida</a></li>
                                        <li><a href="https://www.ducatindia.com/plcscadatraining"
                                                title="PLC Scada Training in Noida">PLC Scada Training in Noida</a>
                                        </li>
                                        <li><a href="https://www.ducatindia.com/sharepointtraining"
                                                title="Sharepoint Training in Noida">Sharepoint Training in
                                                Noida</a></li>
                                    </ul>

                                </div> <!-- End of COl XL 3 -->

                            </div> <!-- End of ROW -->

                        </div>

                    </div>

                </div>

            </div> <!-- End of COl XL 12 -->

        </div> <!-- End of ROW -->

    </div> <!-- End of Container -->

</footer> <!-- End of Footer -->
{{--
 <footer id="footer" class="lightBGColor d-none">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xl-3 col-md-6 col-lg-3 order-md-1 order-lg-1">
                    <a href="{{ url('/')}}">
                    <img src="/images/logo.png" alt="Ducat India" class="img-fluid mb-4"></a>

                    <p>Ducat contributes a lot to the knowledge of its trainees and we try our level hard to contribute the best to increase our trainee’s ability so that they stand out from others and whatever they contribute to the corporate world automatically becomes productive.</p>

                    <p><span class="orangeColor fontQuicksand d-block">For More Info</span><a href="mailto:info@ducatindia.com" class="mail-footer">info@ducatindia.com</a></p>

                    <p class="mb-1"><span class="orangeColor fontQuicksand d-block">Follow Us</span></p>

                    <div class="socialIcons pb-4">
                        <a href="https://www.facebook.com/ducatEducation"  target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/@Ducat_education"  target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/ducateducation"  target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/c/DucatIndiatraining"   target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                    </div>

                </div> <!-- End of COL XL 3 -->

                <div class="col-xl-6 col-lg-6 order-md-3 order-lg-2">
                    
                    <div class="middleArea">
                        
                        <div class="row">
                            
                            <div class="col-xl-12">
                                
                                <h4>Top Courses</h4>

                            </div>
                            
                            <div class="col-xl-6 col-md-6">
                                <ul>
                                    <li><a href="{{ url('languages')}}">Language</a></li>
                                    <li><a href="{{ url('databases')}}">Database</a></li>
                                    <li><a href="{{ url('electronics') }}">Electronics</a></li>
                                    <li><a href="{{ url('linux-administration') }}">Linux / Administration</a></li>
                                    <li><a href="{{ url('networking') }}">Networking</a></li>
                                    <li><a href="{{ url('cad') }}">Cad / Modeling</a></li>
                                    <li><a href="{{ url('software-testing')}}">Software Testing+</a></li>
                                    <li><a href="{{ url('mobile-application') }}">Mobile Application</a></li>
                                    <li><a href="{{ url('erp') }}">ERP+</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-xl-6 col-md-6">
                                <ul>
                                    <li><a href="{{ url('graphics') }}">Graphic / Web Design</a></li>
                                    <li><a href="{{ url('industry-trends') }}">Industry Trends</a></li>
                                    <li><a href="{{ url('cloud-computing') }}">Cloud Computing</a></li>
                                    <li><a href="{{ url('industry-training') }}">Industrial Training</a></li>
                                    <li><a href="{{ url('meantraining') }}">MEAN </a></li>
                                    <li><a href="{{ url('angular2training') }}">Angular</a></li>
                                    <li><a href="{{ url('androidtraining') }}">Android</a></li>
                                    <li><a href="{{ url('pythontraining') }}">Python</a></li>
                                    <li><a href="{{ url('digital-market') }}">Digital Marketing</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div> <!-- End of COL XL 6 -->
                
                <div class="col-xl-3 col-lg-3 col-md-6 order-md-2 order-lg-3">
                    
                    <h4>Student Corner</h4>

                    <ul>
                        <li><a href="{{ url('student-details') }}">Student Placement Form</a></li>
                        <li><a href="{{ url('certificationrequest') }}">Certificate Request Form</a></li>
                        <li><a href="{{ url('ducat-gallery') }}">Ducat Gallery</a></li>
                        <li><a href="{{ url('our-placement-cell') }}">Job & Placement</a></li>
                        <li><a href="https://www.facebook.com/ducatEducation">Social Communities</a></li>
                        
                        <li><a href="{{ url('events') }}">News & Events</a></li>
                        <li><a href="{{ url('upcoming-batches') }}">Upcoming Batches</a></li>
                        <li><a href="{{ url('global-alliances') }}">Global Alliances</a></li>
                        <li><a href="{{ url('schedule-a-free-demo') }}">Schedule a free demo</a></li>
                        
                    </ul>
                    <div class="text-center">
                        <a href="{{ url('online-registration') }}" class="buttonStyleOrange mt-2 mb-3">Pay Online</a>
                        <img src="/images/paymenticon.jpg" alt="Payment Icon" class="img-fluid">
                    </div>
                </div> <!-- End of COL XL 3 -->
    
            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </footer> <!-- End of Footer -->
    --}}
<a href="#header" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
<div class="bottomFooter">

    <div class="container">

        <div class="row">


            <div class="col-xl-6 col-lg-6">

                <ul>
                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('terms-of-use') }}">Terms of Use</a></li>
                    <li><a href="{{ url('career') }}">Career</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                </ul>
                <div class="socialIcons footerSocial">
                    <a href="https://www.facebook.com/ducatEducation" target="_blank" class="facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com/@Ducat_education" target="_blank" class="twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/ducatindia" target="_blank" class="linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/c/DucatIndiatraining" target="_blank" class="youtube"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/ducateducation/" target="_blank" class="instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>

                <div class="socialIcons footerSocial" style="visibility:hidden;">
                    <a href="https://www.facebook.com/ducatEducation" target="_blank" class="facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com/@Ducat_education" target="_blank" class="twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/ducatindia" target="_blank" class="linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/c/DucatIndiatraining" target="_blank" class="youtube"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/ducateducation/" target="_blank" class="instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>

            </div> <!-- End of COL XL 6 -->
            <div class="col-xl-6 col-lg-6">

                <p class="m-0">&copy; Copyright 1999-2022 Ducat Creative, All rights reserved.</p>

            </div> <!-- End of COL XL 6 -->

        </div> <!-- End of ROW -->

    </div> <!-- End of Container -->
</div>
<div class="stickyBar1 ">
    <button type="button">Request a call back</button>
</div>
<div class="stickyBar ">

    <form action="{{ route('center.query') }}" method="post">
        @csrf

        <div class="container">
            <div class="row">

                <div class="col-xl-2 px-1">
                    <input type="text" placeholder="Name" name="name" required>
                    <input name="custom" type="hidden" value="ducat" />
                </div>
                <div class="col-xl-2 px-1">
                    <input type="tel" placeholder="Phone Number" name="contactNumber" required>

                </div>
                <div class="col-xl-2 px-1">
                    <input type="email" placeholder="Email" name="email" required>

                </div>
                <div class="col-xl-2 px-1">
                    <select name="branch" required>
                        <option value="">Select Branch!</option>
                        @include('layouts.form.branch')
                    </select>
                </div>


                <div class="col-xl-2 px-1">
                    <select name="course" required>
                        <option value="Select a course" selected disabled>Select a Course</option>
                        <option value="Python">Python</option>
                        <option value="Datascience">Datascience</option>
                        <option value="Machine learning">Machine learning</option>
                        <option value="Aws">Aws</option>
                        <option value="Azure">Azure</option>
                        <option value="Salesforce">Salesforce</option>
                        <option value="Hadoop">Hadoop</option>
                        <option value="Linux">Linux</option>
                        <option value="Java">Java</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Android">Android</option>
                        <option value="Iot">Iot</option>
                        <option value="Ios">Ios</option>
                        <option value="Sap">Sap</option>
                        <option value="ORACLE">ORACLE</option>
                        <option value="Data science with R">Data science with R</option>
                        <option value="Power bi">Power bi</option>
                        <option value="Tableau">Tableau</option>
                        <option value="Ms SQL">Ms SQL</option>
                        <option value="SQL">SQL</option>
                        <option value="Mis">Mis</option>
                        <option value="AutoCAD">AutoCAD</option>
                        <option value="Embedded system">Embedded system</option>
                        <option value="Plc scada">Plc scada</option>
                        <option value="Php">Php</option>
                        <option value="Web designing">Web designing</option>
                        <option value="UI">UI</option>
                        <option value="React">React</option>
                        <option value="Mern">Mern</option>
                        <option value="Angular">Angular</option>
                        <option value="Mean">Mean</option>
                        <option value="Graphic design">Graphic design</option>
                        <option value="Dotnet">Dotnet</option>
                        <option value="Testing">Testing</option>
                        <option value="Ccna">Ccna</option>
                        <option value="Ccnp">Ccnp</option>
                        <option value="MCSa">MCSa</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Ethical hacking">Ethical hacking</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-xl-2 px-1">
                    <button type="submit">Request a call back</button>
                </div>

            </div>
        </div>
    </form>
</div>
<a id="gaurav-popup" data-target="#popUpForm"
    style="

    position: fixed;
    right: -160px;
    top: calc(50% - 79px);
    z-index: 99978;
    color: #fff;
    font-size: 27px;
    
    border: 2px solid #f58634;
    background-color:#f58634;
    padding-right: 10px;
    padding-left: 10px;
"><i
        class="fas fa-envelope"></i> <span>ENQUIRY NOW</span></a>


<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
<script>
    $(document).on("submit", "form", function() {

        gtag('event', 'conversion', {
            'send_to': 'AW-1015237940/7kfKCKuM94EDELSajeQD'
        });
    });
</script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/captcha.js') }}"></script>

<script src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
<script src="{{ asset('js/jquery.smartmenus.bootstrap-4.min.js') }}"></script>
<script src="{{ asset('js/jquery.magic-accordion.min.js') }}"></script>
<script>
    placenumber();
</script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/type.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script>
    $(document).on("click", ".stickyBar1 button", function() {
        $(".stickyBar").show();
        $(".stickyBar1").hide();
    })
    $(document).on("click", "#gaurav-popup", function() {

        var box = $('#popUpForm123');
        $.fancybox.open(box);
    });
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>


<script src="{{ asset('js/validate.min.js') }}"></script>
<script src="{{ asset('js/methods.min.js') }}"></script>
<script src="{{ asset('js/validation.min.js') }}"></script>
<script src="{{ asset('images/build/ouibounce.js') }}"></script>
<script>
    function LoadScript(url) {
        var script = document.createElement('script');
        script.setAttribute('src', url);
        script.setAttribute('async', false);
        document.head.appendChild(script);
    }


    $(function() {
        var availableTags = {!! $modelHelper->getDataFromSetting() !!};
        $("#main-search-all").autocomplete({
            source: availableTags
        });


    });
    $(".select2").select2({
        placeholder: "Select a Course"
    });
</script>
<!-- OuiBounce Modal -->

<script>
    // if you want to use the 'fire' or 'disable' fn,
    // you need to save OuiBounce to an object
    var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() {
            $('#ouibounce-modal').hide();
            var box = $('#popUpForm123');
            $.fancybox.open(box);
        }
    });

    $('body').on('click', function() {
        $('#ouibounce-modal').hide();
    });

    $('#ouibounce-modal .modal-footer').on('click', function() {
        $('#ouibounce-modal').hide();
    });

    $('#ouibounce-modal .modal').on('click', function(e) {
        e.stopPropagation();
    });
</script>
@yield('footer-js')
<link rel="stylesheet" href="https://s3.amazonaws.com/smatbot/files/smatbot.css.gz">
<script>
    var otherPulseDiv = document.createElement("DIV");
    otherPulseDiv.id = "pulse_smatbot_unique";
    var mainDiv = document.createElement("DIV");
    otherPulseDiv.appendChild(mainDiv);
    mainDiv.id = "closed";
    var img = document.createElement("Img");
    img.id = "main_icon_smatest";
    img.src = "https://s3.ap-south-1.amazonaws.com/custpostimages/sb_images/chat-loading.gif";
    var imgLogo = document.createElement("Img");
    imgLogo.id = "logo-smatest";
    imgLogo.classList.add("logo-smatest");
    mainDiv.appendChild(img);
    mainDiv.classList.add("pointer");
    mainDiv.classList.add("smat-div-before");
    img.classList.add("smat-main-btn-before");
    otherPulseDiv.classList.add("pulse-div-before");
    document.addEventListener("DOMContentLoaded", function(event) {
        document.body.appendChild(otherPulseDiv)
    });
</script>
<script>
    ! function(t, e) {
        "use strict";
        var r = function(t) {
            try {
                var r = e.head || e.getElementsByTagName("head")[0],
                    a = e.createElement("script"),
                    b = document.getElementsByTagName("script")[0];
                a.setAttribute("type", "text/javascript"), a.setAttribute("src", t), a.async = !0, r.insertBefore(a,
                    b)
            } catch (t) {}
        };
        t.chatbot_id = 5486, r("https://s3.amazonaws.com/smatbot/files/smatbot_plugin.js.gz")
    }(window, document);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
</body>

</html>
