/** This file is part of KCFinder project
  *
  *      @desc Context menus
  *   @package KCFinder
  *   @version 3.12
  *    @author Pavel Tzonkov <sunhater@sunhater.com>
  * @copyright 2010-2014 KCFinder Project
  *   @license http://opensource.org/licenses/GPL-3.0 GPLv3
  *   @license http://opensource.org/licenses/LGPL-3.0 LGPLv3
  *      @link http://kcfinder.sunhater.com
  */

_.menu = {

    init: function() {
        $('#menu').html("<ul></ul>").css('display', 'none');
    },

    addItem: function(href, label, callback, denied) {
        if (typeof denied == "undefined")
            denied = false;

        $('#menu ul').append('<li><a href="' + href + '"' + (denied ? ' class="denied"' : "") + '><span>' + label + '</span></a></li>');

        if (!denied && $.isFunction(callback))
            $('#menu a[href="' + href + '"]').click(function() {
                _.menu.hide();
                return callback();
            });
    },

    addDivider: function() {
        if ($('#menu ul').html().length)
            $('#menu ul').append("<li>-</li>");
    },

    show: function(e) {
        var dlg = $('#menu'),
            ul = $('#menu ul');
        if (ul.html().length) {
            dlg.find('ul').first().menu();
            if (typeof e != "undefined") {
                var left = e.pageX,
                    top = e.pageY,
                    win = $(window);

                if ((dlg.outerWidth() + left) > win.width())
                    left = win.width() - dlg.outerWidth();

                if ((dlg.outerHeight() + top) > win.height())
                    top = win.height() - dlg.outerHeight();

                dlg.hide().css({
                    left: left,
                    top: top,
                    width: ""
                }).fadeIn('fast');
            } else
                dlg.fadeIn('fast');
        } else
            ul.detach();
    },

    hide: function() {
        $('#clipboard').removeClass('selected');
        $('div.folder > a > span.folder').removeClass('context');
        $('#menu').hide().css('width', "").html("").data('title', null).unbind().click(function() {
            return false;
        });
        $(document).unbind('keydown').keydown(function(e) {
            return !_.selectAll(e);
        });
    }
};

// FILE CONTEXT MENU
_.menuFile = function(file, e) {
    _.menu.init();

    var data = file.data(),
        files = $('.file.selected').get();

    // MULTIPLE FILES MENU
    if (file.hasClass('selected') && files.length && (files.length > 1)) {
        var thumb = false,
            notWritable = 0,
            cdata;

        $.each(files, function(i, cfile) {
            cdata = $(cfile).data();
            if (cdata.thumb) thumb = true;
            if (!data.writable) notWritable++;
        });

        if (_opener.callBackMultiple) {

            // SELECT FILES
            _.menu.addItem("kcact:pick", _.label("Select"), function() {
                _.returnFiles(files);
                return false;
            });

            // SELECT THUMBNAILS
            if (thumb)
                _.menu.addItem("kcact:pick_thumb", _.label("Select Thumbnails"), function() {
                    _.returnThumbnails(files);
                    return false;
                });
        }

        if (data.thumb || data.smallThumb || _support_zip) {

            _.menu.addDivider();

            // VIEW IMAGE
            if (data.thumb || data.smallThumb)
                _.menu.addItem("kcact:view", _.label("View"), function() {
                    _.viewImage(data);
                });

            // DOWNLOAD
            if (_support_zip)
                _.menu.addItem("kcact:download", _.label("Download"), function() {
                    var pfiles = [];
                    $.each(files, function(i, cfile) {
                        pfiles[i] = $(cfile).data('name');
                    });
                    _.post(_.getURL('downloadSelected'), {dir:_dir, files:pfiles});
                    return false;
                });
        }

        // ADD TO CLIPBOARD
        if (_access.files.copy || _access.files.move) {
            _.menu.addDivider();
            _.menu.addItem("kcact:clpbrdadd", _.label("Add to Clipboard"), function() {
                var msg = '';
                $.each(files, function(i, cfile) {
                    var cdata = $(cfile).data(),
                        failed = false;
                    for (i = 0; i < _.clipboard.length; i++)
                        if ((_.clipboard[i].name == cdata.name) &&
                            (_.clipboard[i].dir == _dir)
                        ) {
                            failed = true;
                            msg += cdata.name + ": " + _.label("This file is already added to the Clipboard.") + "\n";
                            break;
                        }

                    if (!failed) {
                        cdata.dir = _dir;
                        _.clipboard[_.clipboard.length] = cdata;
                    }
                });
                _.initClipboard();
                if (msg.length) _.alert(msg.substr(0, msg.length - 1));
                return false;
            });
        }

        // DELETE
        if (_access.files['delete']) {
            _.menu.addDivider();
            _.menu.addItem("kcact:rm", _.label("Delete"), function() {
                if ($(this).hasClass('denied')) return false;
                var failed = 0,
                    dfiles = [];
                $.each(files, function(i, cfile) {
                    var cdata = $(cfile).data();
                    if (!cdata.writable)
                        failed++;
                    else
                        dfiles[dfiles.length] = _dir + "/" + cdata.name;
                });
                if (failed == files.length) {
                    _.alert(_.label("The selected files are not removable."));
                    return false;
                }

                var go = function(callBack) {
                    _.fadeFiles();
                    $.ajax({
                        type: "post",
                        dataType: "json",
                        url: _.getURL("rm_cbd"),
                        data: {files:dfiles},
                        async: false,
                        success: function(data) {
                            if (callBack) callBack();
                            _.check4errors(data);
                            _.refresh();
                        },
                        error: function() {
                            if (callBack) callBack();
                            $('#files > div').css({
                                opacity: "",
                                filter: ""
                            });
                            _.alert(_.label("Unknown error."));
                        }
                    });
                };

                if (failed)
                    _.confirm(
                        _.label("{count} selected files are not removable. Do you want to delete the rest?", {count:failed}),
                        go
                    );

                else
                    _.confirm(
                        _.label("Are you sure you want to delete all selected files?"),
                        go
                    );

                return false;
            }, (notWritable == files.length));
        }

        _.menu.show(e);

    // SINGLE FILE MENU
    } else {
        $('.file').removeClass('selected');
        file.addClass('selected');
        $('#fileinfo').html($.$.htmlData(data.name) + " (" + _.humanSize(data.size) + ", " + data.date + ")");

        if (_opener.callBack || _opener.callBackMultiple) {

            // SELECT FILE
            _.menu.addItem("kcact:pick", _.label("Select"), function() {
                _.returnFile(file);
                return false;
            });

            // SELECT THUMBNAIL
            if (data.thumb)
                _.menu.addItem("kcact:pick_thumb", _.label("Select Thumbnail"), function() {
                    _.returnFile(_thumbsURL + "/" + _dir + "/" + data.name);
                    return false;
                });

            _.menu.addDivider();
        }

        // VIEW IMAGE
        if (data.thumb || data.smallThumb)
            _.menu.addItem("kcact:view", _.label("View"), function() {
                _.viewImage(data);
            });

        // DOWNLOAD
        _.menu.addItem("kcact:download", _.label("Download"), function() {
            $('#menu').html('<form id="downloadForm" method="post" action="' + _.getURL('download') + '"><input type="hidden" name="dir" /><input type="hidden" name="file" /></form>');
            $('#downloadForm input').get(0).value = _dir;
            $('#downloadForm input').get(1).value = data.name;
            $('#downloadForm').submit();
            return false;
        });

        // ADD TO CLIPBOARD
        if (_access.files.copy || _access.files.move) {
            _.menu.addDivider();
            _.menu.addItem("kcact:clpbrdadd", _.label("Add to Clipboard"), function() {
                for (i = 0; i < _.clipboard.length; i++)
                if ((_.clipboard[i].name == data.name) &&
                    (_.clipboard[i].dir == _dir)
                ) {
                    _.alert(_.label("This file is already added to the Clipboard."));
                    return false;
                }
                var cdata = data;
                cdata.dir = _dir;
                _.clipboard[_.clipboard.length] = cdata;
                _.initClipboard();
                return false;
            });
        }


        if (_access.files.rename || _access.files['delete'])
            _.menu.addDivider();

        // RENAME
        if (_access.files.rename)
            _.menu.addItem("kcact:mv", _.label("Rename..."), function() {
                if (!data.writable) return false;
                _.fileNameDialog(
                    {dir: _dir, file: data.name},
                    'newName', data.name, _.getURL("rename"), {
                        title: "New file name:",
                        errEmpty: "Please enter new file name.",
                        errSlash: "Unallowable characters in file name.",
                        errDot: "File name shouldn't begins with '.'"
                    },
                    _.refresh
                );
                return false;
            }, !data.writable);

        // DELETE
        if (_access.files['delete'])
            _.menu.addItem("kcact:rm", _.label("Delete"), function() {
                if (!data.writable) return false;
                _.confirm(_.label("Are you sure you want to delete this file?"),
                    function(callBack) {
                        $.ajax({
                            type: "post",
                            dataType: "json",
                            url: _.getURL("delete"),
                            data: {dir: _dir, file: data.name},
                            async: false,
                            success: function(data) {
                                if (callBack) callBack();
                                _.clearClipboard();
                                if (_.check4errors(data))
                                    return;
                                _.refresh();
                            },
                            error: function() {
                                if (callBack) callBack();
                                _.alert(_.label("Unknown error."));
                            }
                        });
                    }
                );
                return false;
            }, !data.writable);

        _.menu.show(e);
    }

};

// FOLDER CONTEXT MENU
_.menuDir = function(dir, e) {
    _.menu.init();

    var data = dir.data(),
        html = '<ul>';

    if (_.clipboard && _.clipboard.length) {

        // COPY CLIPBOARD
        if (_access.files.copy)
            _.menu.addItem("kcact:cpcbd", _.label("Copy {count} files", {count: _.clipboard.length}), function() {
                _.copyClipboard(data.path);
                return false;
            }, !data.writable);

        // MOVE CLIPBOARD
        if (_access.files.move)
            _.menu.addItem("kcact:mvcbd", _.label("Move {count} files", {count: _.clipboard.length}), function() {
                _.moveClipboard(data.path);
                return false;
            }, !data.writable);

        if (_access.files.copy || _access.files.move)
            _.menu.addDivider();
    }

    // REFRESH
    _.menu.addItem("kcact:refresh", _.label("Refresh"), function() {
        _.refreshDir(dir);
        return false;
    });

    // DOWNLOAD
    if (_support_zip) {
        _.menu.addDivider();
        _.menu.addItem("kcact:download", _.label("Download"), function() {
            _.post(_.getURL("downloadDir"), {dir:data.path});
            return false;
        });
    }

    if (_access.dirs.create || _access.dirs.rename || _access.dirs['delete'])
        _.menu.addDivider();

    // NEW SUBFOLDER
    if (_access.dirs.create)
        _.menu.addItem("kcact:mkdir", _.label("New Subfolder..."), function(e) {
            if (!data.writable) return false;
            _.fileNameDialog(
                {dir: data.path},
                "newDir", "", _.getURL("newDir"), {
                    title: "New folder name:",
                    errEmpty: "Please enter new folder name.",
                    errSlash: "Unallowable characters in folder name.",
                    errDot: "Folder name shouldn't begins with '.'"
                }, function() {
                    _.refreshDir(dir);
                    _.initDropUpload();
                    if (!data.hasDirs) {
                        dir.data('hasDirs', true);
                        dir.children('span.brace').addClass('closed');
                    }
                }
            );
            return false;
        }, !data.writable);

    // RENAME
    if (_access.dirs.rename)
        _.menu.addItem("kcact:mvdir", _.label("Rename..."), function(e) {
            if (!data.removable) return false;
            _.fileNameDialog(
                {dir: data.path},
                "newName", data.name, _.getURL("renameDir"), {
                    title: "New folder name:",
                    errEmpty: "Please enter new folder name.",
                    errSlash: "Unallowable characters in folder name.",
                    errDot: "Folder name shouldn't begins with '.'"
                }, function(dt) {
                    if (!dt.name) {
                        _.alert(_.label("Unknown error."));
                        return;
                    }
                    var currentDir = (data.path == _dir);
                    dir.children('span.folder').html($.$.htmlData(dt.name));
                    dir.data('name', dt.name);
                    dir.data('path', $.$.dirname(data.path) + '/' + dt.name);
                    if (currentDir)
                        _dir = dir.data('path');
                    _.initDropUpload();
                },
                true
            );
            return false;
        }, !data.removable);

    // DELETE
    if (_access.dirs['delete'])
        _.menu.addItem("kcact:rmdir", _.label("Delete"), function() {
            if (!data.removable) return false;
            _.confirm(
                _.label("Are you sure you want to delete this folder and all its content?"),
                function(callBack) {
                     $.ajax({
                        type: "post",
                        dataType: "json",
                        url: _.getURL("deleteDir"),
                        data: {dir: data.path},
                        async: false,
                        success: function(data) {
                            if (callBack) callBack();
                            if (_.check4errors(data))
                                return;
                            dir.parent().hide(500, function() {
                                var folders = dir.parent().parent();
                                var pDir = folders.parent().children('a').first();
                                dir.parent().detach();
                                if (!folders.children('div.folder').get(0)) {
                                    pDir.children('span.brace').first().removeClass('opened closed');
                                    pDir.parent().children('.folders').detach();
                                    pDir.data('hasDirs', false);
                                }
                                if (pDir.data('path') == _dir.substr(0, pDir.data('path').length))
                                    _.changeDir(pDir);
                                _.initDropUpload();
                            });
                        },
                        error: function() {
                            if (callBack) callBack();
                            _.alert(_.label("Unknown error."));
                        }
                    });
                }
            );
            return false;
        }, !data.removable);

    _.menu.show(e);

    $('div.folder > a > span.folder').removeClass('context');
    if (dir.children('span.folder').hasClass('regular'))
        dir.children('span.folder').addClass('context');
};

// CLIPBOARD MENU
_.openClipboard = function() {

    if (!_.clipboard || !_.clipboard.length) return;

    // CLOSE MENU
    if ($('#menu a[href="kcact:clrcbd"]').html()) {
        $('#clipboard').removeClass('selected');
        _.menu.hide();
        return;
    }

    setTimeout(function() {
        _.menu.init();

        var dlg = $('#menu'),
            jStatus = $('#status'),
            html = '<li class="list"><div>';

        // CLIPBOARD FILES
        $.each(_.clipboard, function(i, val) {
            var icon = $.$.getFileExtension(val.name);
            if (val.thumb)
                icon = ".image";
            else if (!val.smallIcon || !icon.length)
                icon = ".";
            icon = "themes/" + _theme + "/img/files/small/" + icon + ".png";
            html += '<a title="' + _.label("Click to remove from the Clipboard") + '" onclick="_.removeFromClipboard(' + i + ')"' + ((i == 0) ? ' class="first"' : "") + '><span style="background-image:url(' + $.$.escapeDirs(icon) + ')">' + $.$.htmlData($.$.basename(val.name)) + '</span></a>';
        });
        html += '</div></li><li class="div-files">-</li>';
        $('#menu ul').append(html);

        // DOWNLOAD
        if (_support_zip)
            _.menu.addItem("kcact:download", _.label("Download files"), function() {
                _.downloadClipboard();
                return false;
            });

        if (_access.files.copy || _access.files.move || _access.files['delete'])
            _.menu.addDivider();

        // COPY
        if (_access.files.copy)
            _.menu.addItem("kcact:cpcbd", _.label("Copy files here"), function() {
                if (!_dirWritable) return false;
                _.copyClipboard(_dir);
                return false;
            }, !_dirWritable);

        // MOVE
        if (_access.files.move)
            _.menu.addItem("kcact:mvcbd", _.label("Move files here"), function() {
                if (!_dirWritable) return false;
                _.moveClipboard(_dir);
                return false;
            }, !_dirWritable);

        // DELETE
        if (_access.files['delete'])
            _.menu.addItem("kcact:rmcbd", _.label("Delete files"), function() {
                _.confirm(
                    _.label("Are you sure you want to delete all files in the Clipboard?"),
                    function(callBack) {
                        if (callBack) callBack();
                        _.deleteClipboard();
                    }
                );
                return false;
            });

        _.menu.addDivider();

        // CLEAR CLIPBOARD
        _.menu.addItem("kcact:clrcbd", _.label("Clear the Clipboard"), function() {
            _.clearClipboard();
            return false;
        });

        $('#clipboard').addClass('selected');
        _.menu.show();

        var left = $(window).width() - dlg.css({width: ""}).outerWidth(),
            top = $(window).height() - dlg.outerHeight() - jStatus.outerHeight(),
            lheight = top + dlg.outerTopSpace();

        dlg.find('.list').css({
            'max-height': lheight,
            'overflow-y': "auto",
            'overflow-x': "hidden",
            width: ""
        });

        top = $(window).height() - dlg.outerHeight(true) - jStatus.outerHeight(true);

        dlg.css({
            left: left - 5,
            top: top
        }).fadeIn("fast");

        var a = dlg.find('.list').outerHeight(),
            b = dlg.find('.list div').outerHeight();

        if (b - a > 10) {
            dlg.css({
                left: parseInt(dlg.css('left')) - _.scrollbarWidth,
            }).width(dlg.width() + _.scrollbarWidth);
        }
    }, 1);
};