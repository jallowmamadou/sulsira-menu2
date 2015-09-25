<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 1/25/2015
 * Time: 3:00 AM
 */
return [

    'main'=>

                [
                          'admin' =>
                          [
                              'pages'=>
                              [

                                      [
                                          'name'=>'dashboard',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'
                                          ]
                                      ],


                                      [
                                          'name'=>'departments',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'
                                          ]
                                      ],

                                      [
                                          'name'=>'Notifications',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'
                                          ]
                                      ],


                                      [
                                          'name'=>'register',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'
                                          ]
                                      ],


                                      [
                                          'name'=>'staffs',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 3 ,
                                              'views'=> 'all'
                                          ]
                                      ],

                                      [
                                          'name'=>'users',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 3 ,
                                              'views'=> 'all'
                                          ]
                                      ],


                                      [
                                          'name'=>'contact lists',
                                          'visible'=> 1 ,
                                          'url'=>'/dashboard',
                                          'domains'=>'all',
                                          'type'=>'single',
                                          'security'=>[
                                              'level'=> 1 ,
                                              'views'=> 'all'

                                          ]
                                      ],


                                      [
                                          'name'=>'--one--',
                                              'visible'=> 1 , 'url'=>'#','domains'=>'--self--','type'=>'dropdown', 'menu'=>[
                                              ['name'=>'help','visible'=> 0 , 'url'=>'help','domains'=>'veda','type'=>'single','security'=>'2'],
                                              ['name'=>'settings','visible'=> 1 , 'url'=>'admin/settings','domains'=>'veda','type'=>'single','security'=>'2'],
                                              ['name'=>'logout','visible'=> 1 , 'url'=>'logout','domains'=>'veda','type'=>'single','security'=>'2']
                                          ],
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'

                                          ]
                                      ] ,
                                  [
                                          'name'=>'--two--',
                                              'visible'=> 1 , 'url'=>'#','domains'=>'--self--','type'=>'dropdown', 'menu'=>[
                                              ['name'=>'help','visible'=> 0 , 'url'=>'help','domains'=>'veda','type'=>'single','security'=>'5'],
                                              ['name'=>'settings','visible'=> 1 , 'url'=>'admin/settings','domains'=>'veda','type'=>'single','security'=>'1'],
                                              ['name'=>'logout','visible'=> 1 , 'url'=>'logout','domains'=>'veda','type'=>'single','security'=>'3']
                                          ],
                                          'security'=>[
                                              'level'=> 2 ,
                                              'views'=> 'all'

                                          ]
                                      ]

                              ],# end pages

                              'systems' =>
                              [
                                          [
                                              'name'=>'Rent',
                                              'visible'=> 1 ,
                                              'url'=>'/rent',
                                              'domains'=>'all',
                                              'type'=>'dropdown',
                                              'security'=>[
                                                  'level'=> 1 ,
                                                  'views'=> 'all'
                                              ]
                                          ],
                                          [
                                              'name'=>'estates',
                                              'visible'=> 1 ,
                                              'url'=>'/estates',
                                              'domains'=>'all',
                                              'type'=>'dropdown',
                                              'security'=>[
                                                  'level'=> 1 ,
                                                  'views'=> 'all'
                                              ]
                                          ],
                                          [
                                              'name'=>'Human Resource',
                                              'visible'=> 1 ,
                                              'url'=>'/rent',
                                              'domains'=>'all',
                                              'type'=>'dropdown',
                                              'security'=>[
                                                  'level'=> 1 ,
                                                  'views'=> 'all'
                                              ]
                                          ],
                                          [
                                              'name'=>'Marketing',
                                              'visible'=> 1 ,
                                              'url'=>'/rent',
                                              'domains'=>'all',
                                              'type'=>'dropdown',
                                              'security'=>[
                                                  'level'=> 1 ,
                                                  'views'=> 'all'
                                              ]
                                          ],
                                          [
                                              'name'=>'Accounts',
                                              'visible'=> 1 ,
                                              'url'=>'/rent',
                                              'domains'=>'all',
                                              'type'=>'dropdown',
                                              'security'=>[
                                                  'level'=> 1 ,
                                                  'views'=> 'all'
                                              ]
                                          ]
                              ] #end systems
                          ], # end admin

                          'rent'=>
                          [

                                    [
                                        'name'=>'dashboard',
                                        'visible'=> 1 ,
                                        'url'=>'/dashboard',
                                        'domains'=>'all',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 1 ,
                                            'views'=> 'all'
                                        ]
                                    ],

                                    [
                                        'name'=>'land lords',
                                        'visible'=> 1 ,
                                        'url'=>'/land-lords',
                                        'domains'=>'users',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 1 ,
                                            'views'=> 'all'
                                        ]
                                    ],


                                    [
                                        'name'=>'compounds',
                                        'visible'=> 1 ,
                                        'url'=>'/compounds',
                                        'domains'=>'rent',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 3 ,
                                            'views'=> 'admin|access'
                                        ]
                                    ],


                                    [
                                        'name'=>'houses',
                                        'visible'=> 1 ,
                                        'url'=>'/houses',
                                        'domains'=>'rent',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 5 ,
                                            'views'=> 'admin|access'
                                        ]
                                    ],


                                    [
                                        'name'=>'notifications',
                                        'visible'=> 0 ,
                                        'url'=>'/notifications',
                                        'domains'=>'all',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 8 ,
                                            'views'=> 'admin|access'
                                        ]
                                    ],


                                    [
                                        'name'=>'Payments',
                                        'visible'=> 0 ,
                                        'url'=>'/notifications',
                                        'domains'=>'admin',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 1 ,
                                            'views'=> 'admin|access'
                                        ]
                                    ],


                                    [
                                        'name'=>'users',
                                        'visible'=> 1 ,
                                        'url'=>'/users',
                                        'domains'=>'admin',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 8,
                                            'views'=> 'admin|access'
                                        ]
                                    ],


                                    [
                                        'name'=>'agents',
                                        'visible'=> 1 ,
                                        'url'=>'/agents',
                                        'domains'=>'agent',
                                        'type'=>'single',
                                        'security'=>[
                                            'level'=> 1 ,
                                            'views'=> 'agent|admin|access'
                                        ]
                                    ],


                                    [
                                            'name'=>'Tenants',
                                            'visible'=> 1 ,
                                            'url'=>'/tenants',
                                            'domains'=>'rent',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 5 ,
                                                'views'=> 'agent|admin|access'
                                            ]
                                    ],


                                    [
                                            'name'=>'outsource',
                                            'visible'=> 1 ,
                                            'url'=>'/outsources',
                                            'domains'=>'rent',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 5 ,
                                                'views'=> 'agent|admin|access'
                                            ]
                                    ]

                          ], # end rent
                          'accounts'=>
                          [
                                        [
                                            'name'=>'Payments',
                                            'visible'=> 0 ,
                                            'url'=>'/notifications',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 1 ,
                                                'views'=> 'all|admin|access'
                                            ]
                                        ],


                                        [
                                            'name'=>'transactions',
                                            'visible'=> 1 ,
                                            'url'=>'transactions',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ],


                                        [
                                            'name'=>'invoices',
                                            'visible'=> 1 ,
                                            'url'=>'invoices',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ],



                                        [
                                            'name'=>'users',
                                            'visible'=> 1 ,
                                            'url'=>'/users',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ],



                                        [
                                            'name'=>'receipts',
                                            'visible'=> 1 ,
                                            'url'=>'/receipts',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ],



                                        [
                                            'name'=>'notifications',
                                            'visible'=> 1 ,
                                            'url'=>'/receipts',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ],


                                        [
                                            'name'=>'statistics',
                                            'visible'=> 1 ,
                                            'url'=>'/statistics',
                                            'domains'=>'admin',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 8,
                                                'views'=> 'admin|access'
                                            ]
                                        ]

                          ], # end accounts
                          'estates' =>
                          [

                                [
                                    'name'=>'dashboard',
                                    'visible'=> 1 ,
                                    'url'=>'/dashboard',
                                    'domains'=>'all',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 1 ,
                                        'views'=> 'all'
                                    ]
                                ],


                                [
                                    'name'=>'Estates',
                                    'visible'=> 1 ,
                                    'url'=>'/estates',
                                    'domains'=>'agent',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 8,
                                        'views'=> 'agent|admin|access'
                                    ]
                                ],



                                [
                                    'name'=>'agents',
                                    'visible'=> 1 ,
                                    'url'=>'/agents',
                                    'domains'=>'agent',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 1 ,
                                        'views'=> 'agent|admin|access'
                                    ]
                                ],


                                [
                                    'name'=>'customers',
                                    'visible'=> 1 ,
                                    'url'=>'/customers',
                                    'domains'=>'agent',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 1 ,
                                        'views'=> 'agent|admin|access'
                                    ]
                                ],


                                [
                                    'name'=>'partners',
                                    'visible'=> 0 ,
                                    'url'=>'/partners',
                                    'domains'=>'agent',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 1 ,
                                        'views'=> 'agent|admin|access'
                                    ]
                                ],


                                [
                                    'name'=>'transactions',
                                    'visible'=> 0 ,
                                    'url'=>'/transactions',
                                    'domains'=>'admin',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 8 ,
                                        'views'=> 'admin|access'
                                    ]
                                ],


                                [
                                    'name'=>'Prospectives',
                                    'visible'=> 0 ,
                                    'url'=>'/prospectives',
                                    'domains'=>'admin',
                                    'type'=>'single',
                                    'security'=>[
                                        'level'=> 5 ,
                                        'views'=> 'agent|admin|access'
                                    ]
                                ]


                          ], #end estates
                          'marketing' =>

                          [
                                        [
                                            'name'=>'dashboard',
                                            'visible'=> 1 ,
                                            'url'=>'/dashboard',
                                            'domains'=>'all',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 1 ,
                                                'views'=> 'all'
                                            ]
                                        ],


                                        [
                                            'name'=>'agents',
                                            'visible'=> 1 ,
                                            'url'=>'/agents',
                                            'domains'=>'all',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 1 ,
                                                'views'=> 'all'
                                            ]
                                        ],


                                        [
                                            'name'=>'users',
                                            'visible'=> 1 ,
                                            'url'=>'/dashboard',
                                            'domains'=>'all',
                                            'type'=>'single',
                                            'security'=>[
                                                'level'=> 1 ,
                                                'views'=> 'all'
                                            ]
                                        ]
                          ]# end marketing

                ]#end main

    ];