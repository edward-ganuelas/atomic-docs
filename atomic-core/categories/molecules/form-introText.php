<div class="ad_fileFormGroup">
<label class="ad_label js-showHide-trigger"><span class="fa fa-plus"></span> <span class="ad_label__file">Rename</span> introText</label>
<div class="showHide">
  <form id="form-rename-file"  class="ad_fileForm " action="/atomic-core/partial-mngr/file-rename.php" method="post">
      <div class="formInputGroup">
        <div class="inputBtnGroup">
          
          <button class="ad_btn ad_btn-pos" type="submit" >Rename</button>
          <div class="inputBtnGroup__inputWrap"><input type="text" class="form-control" name="renameFileName" value="introText" required></div>
        </div>     
      </div>
      <input type="hidden" name="compDir" value="molecules"/>
      <input type="hidden" name="rename" value="rename"/>
      <input type="hidden" name="oldName" value="introText"/>
    </form>
</div>
<label class="ad_label js-showHide-trigger"><span class="fa fa-plus"></span> Change the <span class="ad_label__file">description</span> for introText</label>
<div class="showHide">
   <form id="form-rename-notes"  class="ad_fileForm " action="/atomic-core/partial-mngr/notes-rename.php" method="post">
        <textarea class="form-control" name="compNotesNew"></textarea>        
        <button class="ad_btn ad_btn-pos" type="submit" >Update</button>
      <input type="hidden" name="compDir" value="molecules"/>
      <input type="hidden" name="fileName" value="introText"/>
      <input type="hidden" name="compNotes" value=""/>
    </form>
</div>
<label class="ad_label js-showHide-trigger"><span class="fa fa-plus"></span> <span class="ad_label__file">Move</span>  introText</label>
<div class="showHide">
  <form id="form-file-move" class="ad_fileForm " action="/atomic-core/partial-mngr/file-move.php" method="post">
      <div class="formGroup">
        <div class="formInputGroup">
          <div class="inputBtnGroup">
            <button class="ad_btn ad_btn-pos" type="submit">Move</button>
            <div class="inputBtnGroup__inputWrap u-bgWhite">
              <select id="newDir" class="form-control" >
                <?php
                    $path = "../../../components";
                    $dir = new DirectoryIterator($path);
                  
                    foreach ($dir as $fileinfo) {
                        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                            
                            echo '<option value="';
                            echo $fileinfo->getFilename();
                            echo '">';          
                            echo $fileinfo->getFilename();
                            echo '</option>';  
                        }
                    }
                ?>
              </select>
            </div>
          </div>  
        </div>
      </div>
      <input type="hidden" name="compDir" value="molecules"/>
      <input type="hidden" name="fileMoveName" value="introText"/>
      <input type="hidden" name="moveFile" value="moveFile"/>
      <input type="hidden" name="compNotes" value=""/>
    </form>
</div>
<label class="ad_label js-showHide-trigger"><span class="fa fa-plus"></span> <span class="ad_label__file">Delete</span> introText</label>
<div class="showHide">
    <form id="form-delete-file" class="ad_fileForm " action="/atomic-core/partial-mngr/delete.php" method="post">
      <div class="formInputGroup">
        <div class="inputBtnGroup">
          <button class="ad_btn ad_btn-neg" type="submit" >Delete</button>
          <div class="inputBtnGroup__inputWrap"><input type="text" class="form-control" name="deleteFileName" placeholder="Must type introText to delete"></div>
        </div>  
      </div>
      <input type="hidden" name="compDir" value="molecules"/>
      <input type="hidden" name="delete" value="delete"/>
      <input type="hidden" name="compNotes" value=""/>
    </form>
</div>
</div>