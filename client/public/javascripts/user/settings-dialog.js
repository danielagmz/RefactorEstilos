import { initDialog, initUploadDialog } from '../common/dialog.js';

if (document.querySelector('.dialog--change-pass')) {
    initDialog({
        dialogSelector: '.dialog--change-pass',
        buttonIdentifier: '.change-password__button',
        formId: 'changePasswordForm',
        submitUrl: 'index.php?action=change_password',
        responseContainerId: 'responseContainer'
    });
}
if (document.querySelector('.dialog--delete-account')) {
    initDialog({
        dialogSelector: '.dialog--delete-account',
        buttonIdentifier: '.delete-account__button',
        formId: 'deleteAccountForm',
        submitUrl: 'index.php?action=delete__account',
        responseContainerId: 'responseDelete',
        redirect: 'index.php?action=read'
    });
}
if (document.querySelector('.dialog__upload--avatar')) {
    initUploadDialog({
        dialogSelector: '.dialog__upload--avatar',
        buttonClass: 'edit-avatar__button',
        formId: 'uploadAvatarForm',
        submitUrl: 'index.php?action=upload__avatar',
        responseContainerId: 'uploadAvatarResponse',
        redirect: 'index.php?action=update_info',
        cropWidth: 120,
        cropHeight: 120,
        previewContainerId: 'avatarPreviewContainer'
    });
}

if (document.querySelector('.dialog__upload--banner')) {
    initUploadDialog({
        dialogSelector: '.dialog__upload--banner',
        buttonClass: 'edit-banner__button',
        formId: 'uploadBannerForm',
        submitUrl: 'index.php?action=upload__banner',
        redirect: 'index.php?action=update_info',
        responseContainerId: 'uploadBannerResponse',
        cropWidth: 1024,
        cropHeight: 119,
        previewContainerId: 'bannerPreviewContainer'

    });
}