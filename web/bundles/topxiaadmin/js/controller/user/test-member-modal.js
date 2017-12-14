define(function(require, exports, module) {

    var Notify = require('common/bootstrap-notify');

	exports.run = function() {
        var $form = $("#test-member-form"),
            isTeacher = $form.find('input[value=ROLE_TEACHER]').prop('checked'),
            currentUser = $form.data('currentuser'),
            editUser = $form.data('edituser');

        if (currentUser == editUser) {
            $form.find('input[value=ROLE_SUPER_ADMIN]').attr('disabled', 'disabled');
        };

        

        $form.on('submit', function() {
            var roles = [];

            var $modal = $('#modal');

            $form.find('input[name="roles[]"]:checked').each(function(){
                roles.push($(this).val());
            });

            

            $form.find('input[value=ROLE_SUPER_ADMIN]').removeAttr('disabled');
            $('#change-user-roles-btn').button('submiting').addClass('disabled');
            $.post($form.attr('action'), $form.serialize(), function(html) {

                $modal.modal('hide');
                Notify.success(Translator.trans('用户题库权限添加成功'));
                var $tr = $(html);
                $('#' + $tr.attr('id')).replaceWith($tr);
            }).error(function(){
                Notify.danger(Translator.trans('操作失败'));
            });

            return false;
        });
        /*var $checkbox = $('#new-checkboxs');
        $('#old-checkboxs').change(function(){
            if ($('#admin').prop('checked') === true) {
                $checkbox.show();
            } else {
                $('#new-checkboxs').find('[type=checkbox]:checked').attr('checked', false);
                $checkbox.hide();
            }
        });*/

	};

});