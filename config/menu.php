<?php
    return[
        [
            'label'=>'Home',
            'route'=>'admin.index',
            'icon'=>'fa-home'
        ],
        [
            'label'=>'Quản lý thông tin',
            'route'=>'admin.index',
            'icon'=>'fa-user-circle',
            'item'=>[
                [
                    'label'=>'Đăng xuất',
                    'route'=>'dangxuat'
                ],
                [
                    'label'=>'Thông tin cá nhân',
                    'route'=>'profile.index'
                ]
               
               
            ]
        ],
        [
            'label'=>'Quản lý khách hàng',
            'route'=>'doanhnghiep.index',
            'icon'=>'fa-tshirt'

        ],
        [
            'label'=>'Quản lý bình luận',
            'route'=>'binhluan.index',
            'icon'=>'fa-tshirt'

        ],
        [
            'label'=>'Quản lý công việc',
            'route'=>'giaoviec.index',
            'icon'=>'fa-tshirt'

        ],      

        [
            'label'=>'Quản lý thuộc tính',
            'route'=>'admin.index',
            'icon'=>'fa-tags',
            'item'=>[
                [
                    'label'=>'Danh mục sản phẩm',
                    'route'=>'danhmuc.index'
                ],
                [
                    'label'=>'Đặc điểm',
                    'route'=>'dacdiem.index'
                ],
                [
                    'label'=>'Tính năng',
                    'route'=>'tinhnang.index'
                ],
                [
                    'label'=>'Lợi ích',
                    'route'=>'loiich.index'
                ]
               
            ]
        ],
        [
            'label'=>'Quản lý sản phẩm',
            'route'=>'sanpham.index',
            'icon'=>'fa-tshirt'

        ],
        [
            'label'=>'Quản lý thông tin',
            'route'=>'thongtin.index',
            'icon'=>'fa-tshirt'

        ],
        
        [
            'label'=>' Quản lý nhân viên',
            'route'=>'admin.index',
            'icon'=>'fa-users-cog',
            'item' =>[
                [
                    'label'=>'Nhân viên',
                    'route'=>'nhanvien.index'
                ],
                [
                    'label'=>'Chức vụ',
                    'route'=>'chucvu.index'
                ]
            ]

        ],
        [
            'label'=>' Cài đặt',
            'route'=>'admin.index',
            'icon'=>'fa-users-cog',
            'item' =>[
                [
                    'label'=>'Quản lý thông tin',
                    'route'=>'lienhe.index'
                ],
                [
                    'label'=>'Quản lý slider',
                    'route'=>'slider.index'
                ]
            ]

        ],
        [
            'label'=>' Quản lý blog',
            'route'=>'admin.index',
            'icon'=>'fa-file-video',
            'item' =>[
                [
                    'label'=>'Video',
                    'route'=>'video.index'
                ],
                [
                    'label'=>'Bài viết',
                    'route'=>'baiviet.index'
                ]
            ]

        ]


    ]


?>