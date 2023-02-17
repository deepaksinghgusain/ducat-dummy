@php
$menu='home';
$segment=Request::segment(1);
if($segment!=null){
$menu='';
}

if($segment=='aboutus'){
$menu='about';
}elseif($segment=="contact-us"){
$menu='contact';
}elseif($segment=="events"){
$menu='events';
}elseif($segment=="jobfair-registration"){
$menu='jobs';
}elseif($segment=="online-registration"){
$menu='online';
}elseif($segment=="campus-training" || $segment=="corporate-training" || $segment=="classroom-training" ||$segment=="industrial-training" ){
$menu='service';
}elseif($segment=="testimonials"){
$menu='testimonials';
}elseif($segment=="blog"){
$menu='blog';
}

@endphp
<style>
.navbar-nav ul li a{
  text-transform:uppercase !important ;
}
</style>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fontQuicksand p-0 ml-4">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <p>Menu</p>
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto" id="main-menu" data-sm-options="{ showTimeout: 150, subIndicators: false, subMenusMinWidth: '250px'}">
            <li class="nav-item {{ $menu=='home'?'active':'' }}">
            <a class="nav-link" href="/">Home</a>           </li>
            <li class="nav-item {{ $menu=='about'?'active':'' }}">
            <a class="nav-link" href="{{ url('aboutus')}}">About</a>           </li>
            <li class="nav-item dropDown" style="text-transform:capitalize !important;">
            <a class="nav-link" href="{{ url('courses')}}">Courses</a>
            <ul  class="dropdown-menu">
         
<li class="dropdownIcon"><a href="#" class="dropdown-item">erp sap & office productivity </a>
                <ul class="dropdown-menu">

                  
                  <li class="dropdownIcon"><a href="#" class="dropdown-item">sap &amp; oracle  </a>
                    <ul class="dropdown-menu">

                     <li class="dropdownicon"><a href="https://www.ducatindia.com/s4-hana-mm-training" class="dropdown-item"> S4 Hana MM</a> 
    <li><a href="https://www.ducatindia.com/sap-success-factors-training" class="dropdown-item"> SAP Success Factors</a></li>
    <li class="dropdownicon"><a href="https://www.ducatindia.com/erp-sap-fiori-training" class="dropdown-item"> SAP UIF FIORI</a></li>
<li class="dropdownicon"><a href="https://www.ducatindia.com/erp-sap-hana-training" class="dropdown-item"> SAP S/4 HANA ADMINISTRATION</a></li>
    <li><a href="https://www.ducatindia.com/erpbibwtraining" class="dropdown-item">erp-sap-bi & bw</a></li>
    <li><a href="https://www.ducatindia.com/erp-abap" class="dropdown-item">erp-sap-abap</a></li>
    <li><a href="https://www.ducatindia.com/erp-basis" class="dropdown-item">erp-sap-basis</a></li>
    <li><a href="https://www.ducatindia.com/erp-crm" class="dropdown-item">erp-sap-crm</a></li>
    <li><a href="https://www.ducatindia.com/erp-fico" class="dropdown-item">erp-sap-fico</a></li>
    <li><a href="https://www.ducatindia.com/erpscmtraining" class="dropdown-item">erp-sap- scm</a></li>
    <li><a href="https://www.ducatindia.com/erp-hr" class="dropdown-item">erp-sap-hr</a></li>
    <li><a href="https://www.ducatindia.com/erp-mm" class="dropdown-item">erp-sap-mm</a></li>
    <li><a href="https://www.ducatindia.com/erp-pp" class="dropdown-item">erp-sap-pp</a></li>
    <li><a href="https://www.ducatindia.com/erp-sd" class="dropdown-item">erp-sap-sd</a></li>
    <li><a href="https://www.ducatindia.com/oracleappstraining" class="dropdown-item">oracle app’s r12 financial</a></li>
    <li><a href="https://www.ducatindia.com/oracletechniacltraining" class="dropdown-item">oracle app’s r12 technical</a></li>
    <li><a href="https://www.ducatindia.com/oracleappsdba" class="dropdown-item">oracle app’s dba</a></li>
    <li><a href="https://www.ducatindia.com/oracleappsscm" class="dropdown-item">oracle app’s scm</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdownIcon"><a href="#" class="dropdown-item">microsoft </a>
                    <ul class="dropdown-menu">

                      <li><a href="https://www.ducatindia.com/advancedmicrosoftexceltraining" class="dropdown-item">advanced microsoft excel</a></li>
    <li><a href="https://www.ducatindia.com/mistraining" class="dropdown-item">mis</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </li>


<li class="dropdownIcon"><a href="#" class="dropdown-item">DEVELOPMENT  </a>
  <ul class="dropdown-menu">
      <li class="dropdownIcon"><a href="#" class="dropdown-item">WEB DEVELOPMENT & DESIGNING  </a>
        <ul class="dropdown-menu">
            
            <li class="dropdownIcon"><a href="https://www.ducatindia.com/php">php technology+</a> 
        <ul class="dropdown-menu">
          <li><a href="https://www.ducatindia.com/phptraining" class="dropdown-item">core php</a></li>
          <li><a href="https://www.ducatindia.com/advancephptraining" class="dropdown-item">advance php</a></li>
          <li><a href="https://www.ducatindia.com/phpsixmonthstraining" class="dropdown-item">php with angular</a></li>
          <li><a href="https://www.ducatindia.com/laraveltraining" class="dropdown-item">laravel</a></li>
        </ul>
            </li>
            <li class="dropdownIcon"><a href="https://www.ducatindia.com/c-cpp-python-r-programming" class="dropdown-item">python </a> 
      <ul class="dropdown-menu">
        <li><a href="https://www.ducatindia.com/pythontraining" class="dropdown-item">python</a></li>
        <li><a href="https://www.ducatindia.com/djangotraining" class="dropdown-item">django</a></li>
        <li><a href="https://www.ducatindia.com/pythonanddjangotraining" class="dropdown-item">python and django</a></li>
      </ul>
            </li>
            <li class="dropdownIcon"><a href="#" class="dropdown-item">WEB DESIGNING  </a>
              <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/angular2training" class="dropdown-item">angular </a></li>
        <li><a href="https://www.ducatindia.com/uiandangulartraining" class="dropdown-item">ui and angular js</a></li>
        <li><a href="https://www.ducatindia.com/meantraining" class="dropdown-item">mean</a></li>
        <li><a href="https://www.ducatindia.com/merntraining" class="dropdown-item">mern</a></li>
        <li><a href="https://www.ducatindia.com/reactjstraining" class="dropdown-item">react js</a></li>
        <li><a href="https://www.ducatindia.com/webdesigntraining" class="dropdown-item">web designing</a></li>
        <li><a href="https://www.ducatindia.com/multimedia-animation" class="dropdown-item">multimedia & animation</a></li>
              </ul>
            </li>
        </ul>
      </li>
      <li class="dropdownIcon"><a href="#" class="dropdown-item">CLOUD DEVELOPMENT  </a>
        <ul class="dropdown-menu">
            <li class="dropdownicon"><a href="https://www.ducatindia.com/cloud-computing" class="dropdown-item">cloud computing</a> 
            <li><a href="https://www.ducatindia.com/amazoncloudtraining" class="dropdown-item">amazon cloud (aws)</a></li>
            <li><a href="https://www.ducatindia.com/azuretraining" class="dropdown-item">azure</a></li>
            <li><a href="https://www.ducatindia.com/cloudinfrastructuretraining" class="dropdown-item">cloud infrastructure</a></li>
            <li><a href="https://www.ducatindia.com/devopstraining" class="dropdown-item">devops training</a></li>
            <li><a href="https://www.ducatindia.com/pegatraininginnoida" class="dropdown-item">pega</a></li>
            <li><a href="https://www.ducatindia.com/salesforcedevtraining" class="dropdown-item">salesforce development</a></li>
            <li><a href="https://www.ducatindia.com/salesforceadmintraining" class="dropdown-item">salesforce administration</a></li>
        </ul>
      </li>
      <li class="dropdownIcon"><a href="#" class="dropdown-item">ARTIFICIAL INTELLIGENCE  </a>
        <ul class="dropdown-menu">
             <li class="dropdownIcon"><a href="https://www.ducatindia.com/data-science" class="dropdown-item">data science</a> 
        <ul class="dropdown-menu">
          <li><a href="https://www.ducatindia.com/datascienceusingpython" class="dropdown-item">data science using python</a></li>
          <li><a href="https://www.ducatindia.com/data-science-using-r-programming" class="dropdown-item">data science using r programming</a></li>
        </ul>
            </li>
             <li class="dropdownIcon"><a href="#" class="dropdown-item">DEEP LEARNING(AI) WITH PROJECTS  </a>
              <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/deeplearningtraining" class="dropdown-item">deep learning</a></li>
              </ul>
            </li>
             <li class="dropdownIcon"><a href="#" class="dropdown-item">MACHINE LEARNING  </a>
              <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/machinelearningtraining" class="dropdown-item">machine learning</a></li>
        <li><a href="https://www.ducatindia.com/pythonwithmachinelearning" class="dropdown-item">machine learning with python</a></li>
        <li><a href="https://www.ducatindia.com/machine-learning-using-r-programming" class="dropdown-item">machine learning using r programming</a></li>
              </ul>
            </li>
             <li class="dropdownIcon"><a href="#" class="dropdown-item">DATA SCIENCE & MACHINE LEARNING  </a>
              <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/datasciencemlusingpython" class="dropdown-item">data science & ml using python</a></li>
        <li><a href="https://www.ducatindia.com/data-science-ml-using-r-programming" class="dropdown-item">data science & machine learning using r programming</a></li>
              </ul>
            </li>
        </ul>
      </li>
      <li class="dropdownIcon"><a href="https://www.ducatindia.com/mobile-application" class="dropdown-item">mobile applications development</a> 
      <ul class="dropdown-menu">
        <li><a href="https://www.ducatindia.com/androidtraining" class="dropdown-item">android</a></li>
        <li><a href="https://www.ducatindia.com/iphonetraining" class="dropdown-item">i-phone</a></li>
        <li><a href="https://www.ducatindia.com/fluttertraining" class="dropdown-item">flutter</a></li>
        <li><a href="https://www.ducatindia.com/corejavaandroidandkotlintraining" class="dropdown-item">corejava + android + kotlin</a></li>
        <li><a href="https://www.ducatindia.com/corejavaandroidandfluttertraining" class="dropdown-item">corejava + android + flutter</a></li>
      </ul>
      </li>

      
  </ul>
</li>
   
            

    <li class="dropdownIcon"><a href="#" class="dropdown-item">PROGRAMMING LANGUAGE  </a>
      <ul class="dropdown-menu">
           <li class="dropdownIcon"><a href="https://www.ducatindia.com/java" class="dropdown-item">java technology+</a> 
      <ul class="dropdown-menu">
        <li><a href="https://www.ducatindia.com/java-for-beginners" class="dropdown-item">java beginners</a></li>
        <li><a href="https://www.ducatindia.com/best-java-training-in-noida" class="dropdown-item">java expert</a></li>
        <li><a href="https://www.ducatindia.com/javaanduitraining" class="dropdown-item">java + ui</a></li>
        <li><a href="https://www.ducatindia.com/javafullstackdeveloper" class="dropdown-item">java full stack developer</a></li>
        <li><a href="https://www.ducatindia.com/springhibernatetraining" class="dropdown-item">java spring & hibernate</a></li>
        <li><a href="https://www.ducatindia.com/springboottraining" class="dropdown-item">spring boot microservices & security with hibernate</a></li>
      </ul>
            </li>
             <li class="dropdownIcon"><a href="https://www.ducatindia.com/c-cpp-python-r-programming" class="dropdown-item">c , c++</a> 
      <ul class="dropdown-menu">
        <li><a href="https://www.ducatindia.com/c-training" class="dropdown-item">c with data structure & algorithms</a></li>
        <li><a href="https://www.ducatindia.com/cpptraining" class="dropdown-item">object oriented data structure & algorithms</a></li>
      </ul>
              </li> 
              <li class="dropdownIcon"><a href="https://www.ducatindia.com/dotnet" class="dropdown-item">.net & microsoft</a> 
      <ul class="dropdown-menu">
        <li><a href="https://www.ducatindia.com/dotnetraining" class="dropdown-item">.net 6 months</a></li>
        <li><a href="https://www.ducatindia.com/dotnetcoretraining" class="dropdown-item">.net 4 months</a></li>
        <li><a href="https://www.ducatindia.com/coredotnettraining" class="dropdown-item">.net core 2.0</a></li>
        <li><a href="https://www.ducatindia.com/dotnettrainingnoida" class="dropdown-item">advanced .net mvc</a></li>
      </ul>
              </li>
               <li class="dropdownIcon"><a href="https://www.ducatindia.com/c-cpp-python-r-programming" class="dropdown-item">r programming</a> 
                  <ul class="dropdown-menu">
                    <li><a href="https://www.ducatindia.com/rprogrammingtraining" class="dropdown-item">r programming</a></li>
                    <li><a href="https://www.ducatindia.com/randdataanalyticstraining" class="dropdown-item">r & data analytics</a></li>
                  </ul>
              </li>
          
      </ul>
    </li>

  <li class="dropdownIcon"><a href="#" class="dropdown-item">DIGITAL MARKETING </a>
                <ul class="dropdown-menu">
                    
                  <li><a href="https://www.ducatindia.com/digital-marketing" class="dropdown-item">DIGITAL MARKETING </a></li>
                    
                    
                  <li><a href="https://www.ducatindia.com/advance-digital-marketing-course" class="dropdown-item">
ADVANCE DIGITAL MARKETING </a></li>
                    
                    
                  <li><a href="https://www.ducatindia.com/seotraining" class="dropdown-item">SEO (SEARCH ENGINE OPTIMISATION) </a></li>
                    
                   
                  
                  
                </ul>
              </li>
              

              <li class="dropdownIcon"><a href="#" class="dropdown-item">database  </a>
                <ul class="dropdown-menu">
                    <li><a href="https://www.ducatindia.com/oracle12cdbatraininginnoida" class="dropdown-item">oracle 12c dba</a></li>
                    <li><a href="https://www.ducatindia.com/oracle11gdevtrainingindelhincr" class="dropdown-item">oracle 11g dev</a></li>
                    <li><a href="https://www.ducatindia.com/oracle11gdataguardtraining" class="dropdown-item">oracle 12c data guard</a></li>
                    <li><a href="https://www.ducatindia.com/oracle11gractraininginnoida" class="dropdown-item">oracle 12c rac</a></li>
                    <li><a href="https://www.ducatindia.com/plsqltraining" class="dropdown-item">sql+pl/sql </a></li>

                    
                </ul>
              </li>



        <li class="dropdownIcon"><a href="#" class="dropdown-item">software automation testing  </a>
          <ul class="dropdown-menu">
              <li><a href="https://www.ducatindia.com/sqttraining" class="dropdown-item">manual testing</a></li>
      <li><a href="https://www.ducatindia.com/manual_selenium" class="dropdown-item">manual+selenium</a></li>
      <li><a href="https://www.ducatindia.com/javaseleniumtraining" class="dropdown-item">java selenium</a></li>
      <li><a href="https://www.ducatindia.com/seleniumwithpythontraining" class="dropdown-item">python selenium</a></li>
      <li><a href="https://www.ducatindia.com/apitestingtrainingnoida" class="dropdown-item">api testing</a></li>
      <li><a href="https://www.ducatindia.com/appiumtraining" class="dropdown-item">appium testing</a></li>

              
          </ul>
        </li>



              

        <li class="dropdownIcon"><a href="#" class="dropdown-item">AUTOMATION TOOLS  </a>
                <ul class="dropdown-menu">
                    
                    <li class="dropdownIcon"><a href="https://www.ducatindia.com/robotics-process-automation" class="dropdown-item">robotics process automation(rpa)</a> 
        <ul class="dropdown-menu">
          <li><a href="https://www.ducatindia.com/roboticsprocessautomationcourses" class="dropdown-item">robotics process automation(rpa) blue prism</a></li>
          <li><a href="https://www.ducatindia.com/automationanywheretraining" class="dropdown-item">automation any where</a></li>
          <li><a href="https://www.ducatindia.com/rpauipathtraining" class="dropdown-item">robotics process automation ui path</a></li>
          <li><a href="https://www.ducatindia.com/rpaworkfusiontraining" class="dropdown-item">robotics process automation work fusion</a></li>
        </ul>
                    </li>

                </ul>
              </li>

              <li class="dropdownIcon"><a href="#" class="dropdown-item">INDUSTRY TRENDS  </a>
                <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/bigdatatraining" class="dropdown-item">big data hadoop with python</a></li>
                  <li><a href="https://www.ducatindia.com/bigdatahadoopdevtraining" class="dropdown-item">big data hadoop spark</a></li>
                  <li><a href="https://www.ducatindia.com/javahadooptraining" class="dropdown-item">core java + hadoop</a></li>
                </ul>
              </li>      
        <li class="dropdownIcon"><a href="#" class="dropdown-item">TRENDING TECHNOLOGIES  </a>
                <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/tableautraininginnoida" class="dropdown-item">tableau </a></li>
                  <li><a href="https://www.ducatindia.com/powerbitraininginnoida" class="dropdown-item">power bi</a></li>
                  <li><a href="https://www.ducatindia.com/microsoft-sql-server-training" class="dropdown-item">microsoft sql server</a></li>
                  <li><a href="https://www.ducatindia.com/sql-server-dba-training-noida" class="dropdown-item">sql server dba</a></li>
                  <li><a href="https://www.ducatindia.com/hrgeneralisttraining" class="dropdown-item">hr generalist</a></li>
                  <li><a href="https://www.ducatindia.com/ibmmainframetraining" class="dropdown-item">ibm mainframe</a></li>
                  <li><a href="https://www.ducatindia.com/bicognostraining" class="dropdown-item">cognos 10 bi</a></li>
                  <li class="dropdownIcon">
                    <a href="https://www.ducatindia.com/sas" class="dropdown-item">sas+</a> 
                    <ul class="dropdown-menu">
                      <li><a href="https://www.ducatindia.com/sastraining" class="dropdown-item">sas</a></li>
                      <li><a href="https://www.ducatindia.com/sasbitraining" class="dropdown-item">sas bi</a></li>
                    </ul>
                  <li><a href="https://www.ducatindia.com/besttallyerp9training" class="dropdown-item">tally</a></li>
                </ul>
              </li>
              <li class="dropdownIcon"><a href="#" class="dropdown-item">CRYPTOCURRENCY & BLOCKCHAIN  </a>
                <ul class="dropdown-menu">
                    <li><a href="https://www.ducatindia.com/blockchaintraining" class="dropdown-item">blockchain</a></li>
                </ul>
              </li>
          
              
    <li class="dropdownIcon"><a href="#" class="dropdown-item">network & security  </a>
          <ul class="dropdown-menu">
              
                    <li><a href="https://www.ducatindia.com/ethicalhackingtraining" class="dropdown-item">Ethical Hacking</a></li>
                    <li><a href="https://www.ducatindia.com/ccnatraining" class="dropdown-item">ccna</a></li>
                    <li><a href="https://www.ducatindia.com/ccna2020training" class="dropdown-item">ccna 2020</a></li>
                    <li class="dropdownIcon"><a href="https://www.ducatindia.com/ccna-security-plus" class="dropdown-item">ccna security + </a>
                      <ul class="dropdown-menu">
                          <li><a href="https://www.ducatindia.com/asafirewalltraining" class="dropdown-item">asa firewall</a></li>
                          <li><a href="https://www.ducatindia.com/ccnasecuritytraining" class="dropdown-item">ccna security</a></li>
                          <li><a href="https://www.ducatindia.com/checkpointfirewalltraining" class="dropdown-item">check point firewall</a></li>
                          <li><a href="https://www.ducatindia.com/paloaltotraining" class="dropdown-item">palo alto</a></li>
                        
                      </ul>
                    </li>
                    <li><a href="https://www.ducatindia.com/ccnptraining" class="dropdown-item">ccnp</a></li>
                    <li><a href="https://www.ducatindia.com/coreccnptraining" class="dropdown-item">core ccnp</a></li>
                    <li><a href="https://www.ducatindia.com/advanceccnptraining" class="dropdown-item">Advance ccnp</a></li>
                    <li><a href="https://www.ducatindia.com/mcsatraining" class="dropdown-item">mcsa 2012</a></li>
                    <li><a href="https://www.ducatindia.com/mcsaserver2016training" class="dropdown-item">mcsa 2016</a></li>
                   
                    
                    <li><a href="https://www.ducatindia.com/vmwaretraining" class="dropdown-item">vmware</a></li>
               
          </ul>
        </li>

              <li class="dropdownIcon"><a href="#" class="dropdown-item">hardware  </a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdownIcon"><a href="#" class="dropdown-item">iot training  </a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.ducatindia.com/iottraining" class="dropdown-item">iot training</a></li>
                       
                        <li><a href="https://www.ducatindia.com/iotwitharduinotraining" class="dropdown-item">iot with  arduino training</a></li>
                        <li><a href="https://www.ducatindia.com/raspberry-pi-training" class="dropdown-item">raspberry pi</a></li>
                    </ul>
                  </li>
                  <li><a href="https://www.ducatindia.com/8051-microcontroller-training" class="dropdown-item">8051 microcontroller</a></li>
                  <li><a href="https://www.ducatindia.com/pic-microcontroller-training" class="dropdown-item">pic microcontroller</a></li>
                  <li><a href="https://www.ducatindia.com/avr-microcontroller-training" class="dropdown-item">avr microcontroller</a></li>
                  <li><a href="https://www.ducatindia.com/armtraining" class="dropdown-item">embedded arm 7</a></li>
                  <li><a href="https://www.ducatindia.com/hardware-and-electronics-training" class="dropdown-item">basic electronics</a></li>
                  <li><a href="https://www.ducatindia.com/rtos-training" class="dropdown-item">rtos </a></li>
                  <li><a href="https://www.ducatindia.com/embedded-linux-internals-training" class="dropdown-item">embedded linux</a></li>
                  <li><a href="https://www.ducatindia.com/roboticstraining" class="dropdown-item">robotics course</a></li>
                  <li><a href="https://www.ducatindia.com/embeddedtraining" class="dropdown-item">embedded 3 months</a></li>
                  <li><a href="https://www.ducatindia.com/embeddedsystemtraining" class="dropdown-item">embedded 6 months</a></li>
                  
                    <li class="dropdownIcon">
                      <a href="https://www.ducatindia.com/plc-scada" class="dropdown-item">plc scada+</a> 
                      <ul class="dropdown-menu">
                        <li><a href="https://www.ducatindia.com/plcscada3monthstraining" class="dropdown-item">plc scada 3 months</a></li>
                        <li><a href="https://www.ducatindia.com/plcscadasixweekstraining" class="dropdown-item">plc scada six weeks</a></li>
                        <li><a href="https://www.ducatindia.com/plcscadatraining" class="dropdown-item">plc scada full cource</a></li>
                      </ul>
                    </li>
                    <li class="dropdownIcon">
                      <a href="https://www.ducatindia.com/vlsi" class="dropdown-item">vlsi</a> 
                      <ul class="dropdown-menu">
                        <li><a href="https://www.ducatindia.com/vlsivhdltraining" class="dropdown-item">vlsi/vhdl 6 weeks</a></li>
                        <li><a href="https://www.ducatindia.com/vlsiverilogtraining" class="dropdown-item">vlsi verilog</a></li>
                        <li><a href="https://www.ducatindia.com/vlsiverilogwithtcltraining" class="dropdown-item">system verilog with tcl</a></li>
                        <li><a href="https://www.ducatindia.com/vlsidesignflowtraining" class="dropdown-item">vlsi design </a></li>
                      </ul>
                    </li> 

                  
                </ul>
              </li>


           
                <li class="dropdownIcon"><a href="#" class="dropdown-item">OPERATING SYSTEM </a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdownicon"><a href="https://www.ducatindia.com/linux-8-training" class="dropdown-item">linux 8</a></li>
    <li><a href="https://www.ducatindia.com/redhattraining" class="dropdown-item">linux 7</a></li>
    <li class="dropdownicon"><a href="https://www.ducatindia.com/linux-administration" class="dropdown-item">linux / administration</a></li>
    <li><a href="https://www.ducatindia.com/openstackadmintraining" class="dropdown-item">red hat openstack cloud administrator</a></li>
    <li><a href="https://www.ducatindia.com/rhcvatraining" class="dropdown-item">rhcva</a></li>
    <li><a href="https://www.ducatindia.com/red-hat-server-hardening-rh413" class="dropdown-item">red hat server hardening (rh413)</a></li>
    <li><a href="https://www.ducatindia.com/436clustertraining" class="dropdown-item">436 cluster </a></li>
    <li><a href="https://www.ducatindia.com/do407ansiblettraining" class="dropdown-item">do 407 ansible</a></li>
                 
                  
                </ul>
              </li>
              
                


           
                 
                <li class="dropdownIcon"><a href="#" class="dropdown-item">Design</a>
                <ul class="dropdown-menu">
                  
                      <li><a href="https://www.ducatindia.com/graphicsdesigntraining" class="dropdown-item">graphics designing</a></li>
    <li class="dropdownIcon"><a href="https://www.ducatindia.com/autocadtraining" class="dropdown-item">autocad</a>
    <ul class="dropdown-menu">
      <li><a href="https://www.ducatindia.com/cadcustomizationtraining" class="dropdown-item">cad customization training </a></li>
      <li><a href="https://www.ducatindia.com/gdandttraining" class="dropdown-item">gd&t training</a></li>
      <li><a href="https://www.ducatindia.com/catiatraining" class="dropdown-item">catia</a></li>
      <li><a href="https://www.ducatindia.com/proetraining" class="dropdown-item">pro-e</a></li>
      <li><a href="https://www.ducatindia.com/cadciviltraining" class="dropdown-item">cad civil six months</a></li>
      <li><a href="https://www.ducatindia.com/cadmechanicaltraining" class="dropdown-item">cad mechanical six months</a></li>
    </ul></li>
    <li><a href="https://www.ducatindia.com/cncprogrammingtraining" class="dropdown-item">cnc programming</a></li>
    <li><a href="https://www.ducatindia.com/staadprotraining" class="dropdown-item">staad pro</a></li>
    <li><a href="https://www.ducatindia.com/revittraining" class="dropdown-item">revit architecture</a></li>
    <li><a href="https://www.ducatindia.com/3dmaxtraining" class="dropdown-item">3d studio max</a></li>
    <li><a href="https://www.ducatindia.com/unigraphicstraining" class="dropdown-item">unigraphics</a></li>
    <li><a href="https://www.ducatindia.com/ansystraining" class="dropdown-item">ansys training</a></li>
    <li><a href="https://www.ducatindia.com/solidworkstraining" class="dropdown-item">solidworks</a></li>
    <li><a href="https://www.ducatindia.com/primavertraining" class="dropdown-item">primavera project planner</a></li>
                    
                
                </ul>
              </li>

               <li class="dropdownIcon"><a href="#" class="dropdown-item">industrial training</a>
                <ul class="dropdown-menu">
                  <li><a href="https://www.ducatindia.com/6-months-industrial-training" class="dropdown-item">6 months industrial training</a></li>
                  <li><a href="https://www.ducatindia.com/6weekssummertraining" class="dropdown-item">4/6 weeks summer training</a></li>
                </ul>
              </li>
         
              <li  class="dropdownIcon"><a href="{{ url('others') }}" class="dropdown-item">OTHERS</a>
              <ul class="dropdown-menu">
              <li><a href="{{ url('ducatintegratedindustrialprofessionalprogram')}}" class="dropdown-item">diipp</a></li>
              <li><a href="{{ url('successmantra')}}" class="dropdown-item">success mantra</a></li>
               <li  class="dropdownIcon"><a href="{{ url('sharepoint') }}" class="dropdown-item">SHAREPOINT</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('sharepointtraining')}}" class="dropdown-item">Sharepoint Development 2010 Training</a></li>
                  <li><a href="{{ url('sharepointdev2013training')}}" class="dropdown-item">Sharepoint Development 2013 Training</a></li>
                  <li><a href="{{ url('sharepointadmin2010training')}}" class="dropdown-item">SharePoint Admin 2010 Training</a></li>
                  <li><a href="{{ url('sharepointadmin2013training')}}" class="dropdown-item">Sharepoint Admin 2013 Training</a></li>
                </ul>
              </li>
                </ul>
              </li>
            </ul>                            
            </li>
            <li class="nav-item dropDown {{ $menu=='service'?'active':'' }}">
            <a class="nav-link" href="#">Services</a>
            <ul>
              <li><a href="{{url('campus-training')}}">Campus Training</a></li>
              <li><a href="{{url('corporate-training')}}">Corporate Training</a></li>
              <li><a href="{{url('classroom-training')}}">Classroom Training</a></li>
              <li><a href="{{url('industrial-training')}}">Industrial Training</a></li>
            </ul>
            </li>
            <li class="nav-item {{ $menu=='events'?'active':'' }}">
            <a class="nav-link" href="{{ url('events') }}">Events</a>           </li>
            <li class="nav-item {{ $menu=='online'?'active':'' }}">
            <a class="nav-link" href="{{url('online-registration')}}">Online Registration</a>           </li>
            <!--<li class="nav-item {{ $menu=='jobs'?'active':'' }}">-->
            <!--  <a class="nav-link" href="{{ url('jobfair-registration') }}">Jobs</a>-->
            <!--</li>-->
            <!--<li class="nav-item  {{ $menu=='testimonials'?'active':'' }}">
            <a class="nav-link" href="{{ url('testimonials') }}">Testimonials</a>           </li>-->
            <li class="nav-item">
            <a class="nav-link" href="https://tutorials.ducatindia.com/" target="new">Tutorials</a>           </li>
          
            
            <li class="nav-item dropDown" style="text-transform:capitalize !important;">
            <a class="nav-link" href="{{ url('online-courses') }}">Pearson Training</a>
            <ul>
         
@foreach(ModelHelper::getOnlineCategoryListFront() as $a)
<li><a href="{{ url('online-course/category/'.$a->seo_url) }}" >{{ $a->name }}  </a></li>
@endforeach
</ul>

</li>
            
            
            <!--<li class="nav-item {{ $menu=='blog'?'active':'' }}"> <a class="nav-link" href="{{ url('blog') }}">Blog</a> </li>-->
            <li class="nav-item {{ $menu=='contact'?'active':'' }}">
            <a class="nav-link" href="{{ url('contact-us')}}">Contact</a>            </li>
          </ul>
          </div>
        </nav>