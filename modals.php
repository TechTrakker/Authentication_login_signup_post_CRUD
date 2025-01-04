 <!-- Signup Modal ********************************************************-->
 <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="signupForm">
                     <div class="mb-3">
                         <label for="signupUsername" class="form-label">Username</label>
                         <input type="text" class="form-control" id="signupUsername" name="username" required>
                     </div>
                     <div class="mb-3">
                         <label for="signupEmail" class="form-label">Email</label>
                         <input type="email" class="form-control" id="signupEmail" name="email" required>
                     </div>
                     <div class="mb-3">
                         <label for="signupPassword" class="form-label">Password</label>
                         <input type="password" class="form-control" id="signupPassword" name="password" required>
                     </div>
                     <button type="submit" class="btn btn-primary">Signup</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- Login Modal*********************************************** -->
 <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="loginModalLabel">Login</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="loginForm">
                     <div class="mb-3">
                         <label for="loginEmail" class="form-label">Email</label>
                         <input type="email" class="form-control" id="loginEmail" name="email" required>
                     </div>
                     <div class="mb-3">
                         <label for="loginPassword" class="form-label">Password</label>
                         <input type="password" class="form-control" id="loginPassword" name="password" required>
                     </div>
                     <button type="submit" class="btn btn-secondary">Login</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!-- Post Modal******************************************************************* -->
 <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="postModalLabel">Create Post</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="postForm">
                     <div class="mb-3">
                         <label for="postTitle" class="form-label" style="color: white;">Post Title</label>
                         <input type="text" class="form-control" id="postTitle" name="title" required>
                     </div>
                     <div class="mb-3">
                         <label for="postText" class="form-label" style="color: white;">Post Content</label>
                         <textarea class="form-control" id="postText" name="text" rows="4" required></textarea>
                     </div>
                     <button type="submit" class="btn btn-success" id="m-post">Create Post</button>
                 </form>
             </div>
         </div>
     </div>
 </div>


 <!-- Edit Post Modal -->
 <div class="modal" id="editPostModal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Edit Post</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form id="editPostForm">
                     <input type="hidden" id="editPostIdField" name="id">
                     <div class="form-group">
                         <label for="editPostTitleField">Title</label>
                         <input type="text" class="form-control" id="editPostTitleField" name="title">
                     </div>
                     <div class="form-group">
                         <label for="editPostTextField">Text</label>
                         <textarea class="form-control" id="editPostTextField" name="text"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Update Post</button>
                 </form>
             </div>
         </div>
     </div>
 </div>