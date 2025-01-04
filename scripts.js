$(document).ready(function () {
    // Function to load posts in descending order
    function loadPostsForUser() {
        $.post('ajax_handler.php', { action: 'fetchPosts' }, function (posts) {
            $('#postsContainer').html(posts.map(post => `
                <div class="card mb-3" id="post_${post.id}">
                    <div class="card-body">
                        <h5 class="card-title">${post.title}</h5>
                        <p class="card-text">${post.text}</p>
                        <button class="btn btn-warning editPostButton" data-id="${post.id}" data-title="${post.title}" data-text="${post.text}">Edit</button>
                        <button class="btn btn-danger deletePostButton" data-id="${post.id}">Delete</button>
                    </div>
                </div>
            `).join(''));
            bindPostActionEvents();
        }, 'json');
    }

    // Function to bind Edit and Delete event handlers********************************
    function bindPostActionEvents() {

        $(document).on('click', '.editPostButton', function () {
            const postId = $(this).data('id');
            const postTitle = $(this).data('title');
            const postText = $(this).data('text');

            $('#editPostIdField').val(postId);
            $('#editPostTitleField').val(postTitle);
            $('#editPostTextField').val(postText);
            $('#editPostModal').modal('show');
        });

        // Event for Delete Post button*********************************************************
        $(document).on('click', '.deletePostButton', function () {
            const postId = $(this).data('id');

            $.post('ajax_handler.php', { action: 'deletePost', id: postId }, function (response) {
                if (response.status === 'success') {

                    showAlert(response.message, 'success');
                    $(`#post_${postId}`).remove();
                } else {

                    showAlert(response.message, 'danger');
                }
            }, 'json');
        });
    }


    loadPostsForUser();

    // Submit Edit Post Form*************************************************
    $('#editPostForm').submit(function (e) {
        e.preventDefault();

        const editedPostData = {
            action: 'editPost',
            id: $('#editPostIdField').val(),
            title: $('#editPostTitleField').val(),
            text: $('#editPostTextField').val()
        };

        $.post('ajax_handler.php', editedPostData, function (response) {
            if (response.status === 'success') {

                showAlert(response.message, 'success');
                $('#editPostModal').modal('hide');
                loadPostsForUser();
            } else {

                showAlert(response.message, 'danger');
            }
        }, 'json');
    });

    // Submit New Post Form***********************************************
    $('#createPostForm').submit(function (e) {
        e.preventDefault();

        const newPostData = {
            action: 'createPost',
            title: $('#newPostTitle').val(),
            text: $('#newPostText').val()
        };

        $.post('ajax_handler.php', newPostData, function (response) {
            if (response.status === 'success') {

                showAlert(response.message, 'success');
                $('#createPostForm')[0].reset();
                loadPostsForUser();
            } else {

                showAlert(response.message, 'danger');
            }
        }, 'json');
    });

    // Submit Signup Form************************************************************
    $('#signupForm').submit(function (e) {
        e.preventDefault();
        $.post('ajax_handler.php', $(this).serialize() + '&action=signup', function (response) {

            showAlert(response.message, 'success');
            if (response.status === 'success') location.reload();
        }, 'json');
    });

    // Submit Login Form
    $('#loginForm').submit(function (e) {
        e.preventDefault();
        $.post('ajax_handler.php', $(this).serialize() + '&action=login', function (response) {

            showAlert(response.message, 'success');
            if (response.status === 'success') location.reload();
        }, 'json');
    });

    // Logout User*************************************************************************
    $('#logoutBtn').click(function () {
        $.post('ajax_handler.php', { action: 'logout' }, function () {
            location.reload();
        });
    });

    // Submit Post Form (Creating new post)*********************************************
    $('#postForm').submit(function (e) {
        e.preventDefault();
        $.post('ajax_handler.php', $(this).serialize() + '&action=createPost', function (response) {

            showAlert(response.message, 'success');
            if (response.status === 'success') loadPostsForUser();
        }, 'json');
    });
});
// Function to show a custom Bootstrap alert*************************************************
function showAlert(message, type = 'primary') {
    const alertHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;

    $('#alertContainer').html(alertHTML);


    setTimeout(function () {
        $('#alertContainer').html('');
    }, 5000);
}
