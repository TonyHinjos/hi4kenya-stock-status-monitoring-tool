 
  
    <script type="text/javascript">

     function validateFundingAgency()
     {
      
      var x=document.forms["FundingArgencyName"]["funding_agency_name"].value;
      var y=document.forms["FundingArgencyName"]["funding_agency_description"].value;

        if ((x==null || x=="") && (y==null || y==""))
         {
          alert("All Field must be filled out");
          return false;
         }
        if (x==null || x=="")
         {
          alert("Input the funding agency name");
          return false;
         }
        if (y==null || y=="")
         {
          alert("Include decription");
          return false;
         }
     }
    </script>
    <!--this is a script for validating the input in to the registration form-->
    <script type="text/javascript">

    function validateSupplyAgency()
    {
    var a=document.forms["reg"]["supply_agency_name"].value;
    var b=document.forms["reg"]["contact_person"].value;
    var c=document.forms["reg"]["contact_phone"].value;
    var d=document.forms["reg"]["supply_chain_description"].value;


    
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Please include the name of the supply agency");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Please inlude the contact person");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Please include the contact phone");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Please include the description");
    return false;
    }   
    }
    </script>



    <script type="text/javascript">

    function validateCommodity()
    {
    var a=document.forms["val"]["commodity_name"].value;
    var b=document.forms["val"]["pack_size"].value;
    var c=document.forms["val"]["funding_agency_name"].value;
    var d=document.forms["val"]["commodity_description"].value;


    
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Please include the commodity name");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Please include the pack size");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Please include the funding agency ");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Please include the commodity description");
    return false;
    }   
    }
    </script>
 

<!-- c------------------------------------------------d----------f-----------d-----------------f--------------------------------------------------------------c  -->
   
      <div class= "modal fade" id="SupplyAgencyRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
      
       <form class="form-horizontal" role="form" name="reg" action="<?= base_url();?>index.php/agencyhome/save" onsubmit="return validateSupplyAgency()" method="post" enctype="multipart/form-data" autocomplete="on">
          <!--<form class= "form-horizontal"  name="reg" action="sign-up.php" onsubmit="return validateSupplyAgency()" method="post" enctype="multipart/form-data" autocomplete="on">-->  
            <div class= "modal-header">
              <h4 class= "position" >Add a supply chain agency</h4>              
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>  
            </div>
    

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="supply_agency_name" placeholder="Supply agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact person: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_person" placeholder="Contact person"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact Phone </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_phone" placeholder="Contact phone"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="supply_chain_description" placeholder="Add description"></textarea>                
                </div>                
              </div> 


               
            </div> <!--end of the modal body-->




            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>
    
<!--  ----------------------------------------------------------------------------------------------------------------------------------------------------------     -->


      <div class= "modal fade" id="FundingAgencyrRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="FundingArgencyName" action="sign-up.php" onsubmit="return validateFundingAgency()" method="post" enctype="multipart/form-data" autocomplete="on">  
            <div class= "modal-header"> 

              <h4 class= "position" >Add a funding Agency</h4> 
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>              
               
            </div>   

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Funding Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="funding_agency_name" placeholder="Funding agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="funding_agency_description" placeholder="Add description"></textarea>                
                </div>                
              </div>  

                              
            </div> <!--end of the modal body-->

            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>


    <!-------------------------------------------------------->

    <div class= "modal fade" id="CommodityRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
<form class= "form-horizontal"  name="val" action="<?= base_url();?>index.php/agencyhome/saveCommodity" onsubmit="return validateCommodity()" method="post" enctype="multipart/form-data" autocomplete="on">  
            <div class= "modal-header"> 

              <h4 class= "position" >Add a Commodity</h4> 
              <div class= "position_data_dismis_signs" data-dismiss = "modal"><b>X</b></div>              
               
            </div>   

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Commodity Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="commodity_name" placeholder="commodity name"> <!--the form-control gives the form some styling-->
                </div>
              </div>

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Commodity Pack Size: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="pack_size" placeholder="pack size"> <!--the form-control gives the form some styling-->
                </div>
              </div>
                   
 

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Funding Agency: </label>
                <div class= "col-lg-8">
               <select type="text" class="form-control" name="funding_agency_name" placeholder="select one">
                  <option value="PMI">PMI</option>
                  <option value="Global Fund">Global Fund</option>
                  <option value="UNITAID">UNITAID</option>
                  <option value="GoK">GoK</option>
                  </select>
                </div>
              </div>


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="commodity_description" placeholder="Add description"></textarea>                
                </div>                
              </div>  

                              
            </div> <!--end of the modal body-->

            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-danger" data-dismiss = "modal">Close</a>                  
            </div>

          </form>

        </div>
      </div>
    </div>