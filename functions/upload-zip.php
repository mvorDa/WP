//add zip file support for media uploads
function zip_upload_mimes($existing_mimes = array()) {
    $existing_mimes['zip'] = 'application/zip';
    $existing_mimes['gz'] = 'application/x-gzip';
    return $existing_mimes;
}
add_filter('upload_mimes', 'zip_upload_mimes', 999, 1);
