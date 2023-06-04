<!-- Modal -->
<div class="modal fade" id="addPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Save new password</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
      <form action="" id="addPassForm">
        <div id="err">

        </div>
      <span style="color:red; font-size:14pt;">*</span> Category:
        <input type="text" class="inp" name="pcat" id="pcat" style="margin-bottom:10px;" placeholder="Category" required>

        <span style="color:red; font-size:14pt;">*</span>User Name:
        <input type="text" class="inp" name="user" id="user" style="margin-bottom:10px;" placeholder="User Name" required>
        
        <span style="color:red; font-size:14pt;">*</span> Password:
        <input type="password" class="inp" name="ppass" id="ppass" style=" border-radius: 5px; padding: 5px; width:100%; border: 1px solid white; background-color: #e6e6e8; margin-top:-1px;" placeholder="Password" required>

        <span style="color:red; font-size:14pt;">*</span> Re-Password:
        <input type="password" class="inp" name="cpass" id="cpass" style=" border-radius: 5px; padding: 5px; width:100%; border: 1px solid white; background-color: #e6e6e8; margin-top:-1px; " placeholder="Re-Password" required>

        <span style="color:red; font-size:14pt;">*</span> Description:
        <textarea name="des" id="des" cols="30" rows="10"  style="height:80px;  border-radius: 5px; padding: 5px; width:100%; border: 1px solid white; background-color: #e6e6e8; margin-top:-1px;" placeholder="type.." required>

        </textarea>
<hr>
        <span style="background-color: red; color:white; margin-bottom:20px; padding:2px; border-radius: 3px;">Security Level: </span> 
        <label class="containerr" style="margin-top:10px;">Low
  <input type="radio" checked="checked"  value="low" name="radio">
  <span class="checkmark"></span>
</label>
<label class="containerr">Medium
  <input type="radio" name="radio"  value="mid">
  <span class="checkmark"></span>
</label>
<label class="containerr">High
  <input type="radio" name="radio"  value="high">
  <span class="checkmark"></span>
</label>
        <input type="hidden" name="cat" id="catt" value="44">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>