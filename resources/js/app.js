/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import LoadingPlugin from "vue-loading-overlay";
import Loading from "vuejs-loading-plugin";

Vue.use(LoadingPlugin);

const app = new Vue({
    el: '#app',
    data: {
        NameTypeEstate: "",
        NameEditTypeEstate: "",
        NameOwnership: "",
        EditNameOwnership: "",
        NamePossibity: "",
        EditNamePossibity: "",
        NameUsage: "",
        EditNameUsage: "",
        usernameEdit: "",
        mobileEdit: "",
        NameRegion: "",
        EditNameRegion: "",
        city: "سنندج",
        regionselect: "2",
        estatetype: "1",
        usagetype: "",
        ownership: "",
        LandTotalSquare: '',
        SquareFootage: "",
        RoomNumber: "",
        yearmade: "",
        MobileNumber: "",
        fullname: "",
        Email: "zanazahedi77@gmail.com",
        Address: "",
        loanAmount: "",
        price: "",
        loan: "",
        price_rahan: "",
        RentAmount: "",
        textNote: "",
        floor: "",
        ComplimentalDescription: "",
        province: "کردستان",
        typeAdv: "",
        VirtualTourCode: "",
        requestTour: '0',
        regions: [],
        UsageTypes: [],
        EstateOwnerShips: [],
        Possibilities: [],
        Estatetypes: [],
        ImageCat: "",
        position_type: "",
        namereq: "",
        estatetypereq: "",
        pricereq: "",
        position_type_req: "",
        Vamcheck: "",
        featured: "",
        regionselectreq: "",
        RoomNumberreq: "",
        mobilereq: "",
        LandTotalSquarereq: "",
        floorreq: "",
        titleSilder: "",
        DescSilder: "",
        imageSilder: "",
        price_seller: "",
        sellername: "",
        buierName: "",
        price_trans: "",
        datetransaction: "",
        descTrans: "",
        commission: "",
        estatetypetra: "",
        regionselecttra: "",
        keyregion: "",
        numbertran: "",
        verify_code: "",
        mobile_forgot: "",
        code_temp: "",
        new_password: "",
        tourrequest: "",
        EmailEstate: "",


        province_user: "کردستان",
        city_user: "سنندج",
        regionselect_user: "",
        estatetype_user: "",
        estatetype_userOffer: "",
        position_type_user: "",
        usagetype_user: "",
        ownership_user: "",
        requestTour_user: "",
        RoomNumber_user: "",
        floor_user: "",
        Address_user: "",
        LandTotalSquare_user: "",
        SquareFootage_user: "",
        yearmade_user: "",
        fullname_user: "",
        MobileNumber_user: "",
        price_rahan_user: "",
        RentAmount_user: "",
        loanAmount_user: "",
        price_user: "",
        ComplimentalDescription_user: "",

        regionlist: [],
        errors: [],
        allerros: [],
        success: false,
        price_low: "",
        price_high: "",
        landtotal_hight: "",
        landtotal_low: "",
        regionselectedSearch: "",
        regionrequestOffer: "",
        EstateList: [],
        landTotla: '',
        files: [],
        avatar: "",
        image: "",
        images: [],
        nameOffer: "",
        mobileOffer: "",
        textOffer: "",
        textStatus: "",
        minprice: "",
        maxprice: "",
        minmeter: "",
        maxmeter: "",
        search: "",
        showsearch: false,
        estatlist: [],
        NewPassword: "",
        unit: "",
        unitfloor: "",
        elevator: "",
        parking: "",
        warehouse: "",
        blacony: "",
        exchangeInput: "",
        ApptStatus: "",
        listPos: [],
        emailContactus: "",
        fullnameTran: "",
        Sellername: "",
        priceTran: "",
        comissionprice: "",
        TopicSlider: "",
        TextSlider: "",
        titlereport: "",
        resultstatus: "",

        FullnameBuyer: "",
        FullnameSeller: "",
        TellSeller: "",
        TellBuyer: "",
        priceEstate: "",
        AddressEstate: "",
        DateVisit: "",
        TimeVisit: "",
        DescriptionVisi: "",
        FindUser: "",
        codeEstate: "",
        ForceUpdate: "",
        Version: "",
        file: '',
        successStatus: '',
        isLoading: false,
        fullPage: true,
        mobileuser: '',
        role: '',
        passworduser: '',
        pricerent: '',
        Deposit: '',
        lordEstate: '',
        tenantEstate: '',

        catename: '',
        titlePost: '',
        postprice: '',
        catedesc: '',
        parentcateId: '',

        has_stock: false,
        is_featured: 0,
        is_sellable: 0,
        price_product: 0,
        quantity_stock: 0,
        is_basket_discount: 0,
        qtyProduct: 1,
        unitamount: 1,
        statusproduct: 0,
        CodeProduct: '',
        titleProduct: '',
        AuthorBlog: "مدیریت",
        titleProductEn: '',
        tagproduct: '',
        keywordproduct: '',


        categorys: [],
        Products: [],
        users: [],
        brand: [],
        Proddata: [],
        pagination: {

            'current_page': 1
        },
        categories: [],
        pricelist: [],
        coffelists: [],
        typeMills: [],
        productpackages: [],
        productweights: [],
        selected: {
            price: [],
            categories: [],
            coffelists: [],
            typeMills: [],
            productweights: [],
            productpackages: []
        },
        titleService: "",
        typeService: "",
        pricePost: "",

        addressDelivery: "",
        postalcode: "",
        namedelivery: "",
        mobiledelivery: "",
        telephonedelivery: "",
        TotalAmount: '',

        percentProduct: 0,
        feeGroup: 0,
        unitPercent: 0,
        TotalPercent: '',

    },

    created: function () {

    },
    mounted() {

    },
    watch: {


        unitamount: function (val) {
            this.unitamount = val;
            this.TotalAmount = this.unitamount;
            return this.TotalAmount;

        },
        selected: {
            handler: function () {
                this.loadProducts();
                this.loadCategories();
                this.loadCoffeTypes();
                this.loadTypeMill();
                this.loadProductWeight();
                this.loadProductPackage();
            },
            deep: true
        }
    },
    methods: {

        loadProducts: function () {
            axios.get('/getProducts', {
                params: this.selected
            }).then((response) => {

                this.Products = response.data.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },
        loadCategories: function () {
            axios.get('/getCategory', {
                params: _.omit(this.selected, 'categories')
            }).then((response) => {

                this.categories = response.data.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },
        loadCoffeTypes: function () {
            axios.get('/getTypeCoffee', {
                params: _.omit(this.selected, 'coffelists')
            }).then((response) => {

                this.coffelists = response.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },
        loadTypeMill: function () {
            axios.get('/getTypeMill', {
                params: _.omit(this.selected, 'typeMills')
            }).then((response) => {

                this.typeMills = response.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },
        loadProductWeight: function () {
            axios.get('/getProductWeight', {
                params: _.omit(this.selected, 'productweights')
            }).then((response) => {

                this.productweights = response.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },
        loadProductPackage: function () {
            axios.get('/getProductPackage', {
                params: _.omit(this.selected, 'productpackages')
            }).then((response) => {

                this.productpackages = response.data;
                this.loading = false;

            }).catch(function (error) {
                console.log(error);
            });
        },


        NewAddress: function () {

            var ostan_name = $('#ostan option:selected').text();
            var city_name = $('#city option:selected').text();


            if ($('#ostan').val() === '') {
                swal("استان", "لطفا استان خود را مشخص کنید", "error");
                return false;
            } else if ($('#city').val() === '') {
                swal("شهرستان", "لطفا شهرستان خود را مشخص کنید", "error");
                return false;
            } else if (this.addressDelivery == '') {
                swal("آدرس ", "لطفا آدرس خود را وارد کنید", "error");
                return false;
            } else if (this.postalcode == '') {
                swal("کدپستی ", "لطفا کدپستی خود را وارد کنید", "error");
                return false;
            } else if (this.namedelivery == '') {
                swal("آدرس ", "لطفا نام تحویل گیرنده خود را وارد کنید", "error");
                return false;
            } else if (this.mobiledelivery == '') {
                swal("شماره موبایل ", "لطفا شماره موبایل خود را وارد کنید", "error");
                return false;
            } else if (this.telephonedelivery == '') {
                swal("شماره تلفن ثابت ", "لطفا شماره تلفن ثابت خود را وارد کنید", "error");
                return false;
            } else {

                axios.post('/User/ActionServer', {
                    action: 'NewAddress',
                    ostan_name: ostan_name,
                    city_name: city_name,
                    addressDelivery: this.addressDelivery,
                    postalcode: this.postalcode,
                    namedelivery: this.namedelivery,
                    mobiledelivery: this.mobiledelivery,
                    telephonedelivery: this.telephonedelivery,
                }).then(response => {

                    //console.log(response.data);

                    // alert(response.data.status);
                    if (response.data.status === 200) {


                        swal("آدرس جدید", "آدرس جدید ثبت شد", "success", {
                            button: "تشکر"
                        });
                        window.location.reload();


                    }


                }, response => {
                    swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                        button: "باشه"
                    });
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        showProduct: function () {

            // page_url=page_url || '/ShowProduct';
            axios.get('/listProduct?page=' + this.pagination.current_page).then(response => {

                console.log(response.data.data);
                this.Proddata = response.data.data.data;
                this.pagination = response.data.data;

                //alert(response.data);
            });
        },

        SearchEstate: function () {

            fetch('/admin/getSearch?q=' + this.search)
                .then(res => res.json())
                .then(res => {
                    alert(res);
                    this.estatlist = res;
                    this.search = '';
                    this.showsearch = true;
                }).catch(err => {

                console.log(err);
            })

        },

        SearchEsate: function () {


            var citylist = $("#city_user option:selected").text();
            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();
            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();
            var LandTotalSquare = $("#LandTotalSquare").text();

            /* alert(this.regionselect_user);
              alert(this.estatetype_user);
              alert(this.price_high);
              alert(this.price_low);
              alert(this.landtotal_low);
              alert(this.landtotal_hight);
  */

            /*  axios.get('Search?regionId='+this.regionselect_user).then(response=>{


                   console.log(response.data.data);

                   alert();


                   //alert(response.data);
               })*/

            /*   estatetype_user:this.estatetype_user,
                   price_high:this.price_high,
                   price_low:this.price_low,
                   landtotal_low:this.landtotal_low,
                   landtotal_hight:this.landtotal_hight,*/


            /* params: this.axiosParams*/

            //alert(this.regionselectedSearch);

            // params: this.axiosParams
            //  var Inpu=$("regionInput").val(this.estatetype_user);
            //   alert(Inpu);

            /*fetch('/Search?region='+this.regionselectedSearch+'&EstateType='+this.estatetype_user)
                 .then(res =>res.json())
                 .then(res =>{

                     alert(res);
                     console.log(res);

                 }).catch(err => {
                 console.log(err);
             });*/

            //?region='+this.regionselectedSearch+'&EstateType='+this.estatetype_user

            fetch('/SearchEstate?q=region=' + this.regionselectedSearch +
                '&EstateType=' + this.estatetype_user)
                .then(res => res.json())


            /*   axios.get('/SearchEstate?',{
                   params:{
                       region:this.regionselectedSearch,
                       EstateType:this.estatetype_user,
                       price_high:this.price_high,
                       price_low:this.price_low,
                       landtotal_low:this.landtotal_low,
                       landtotal_hight:this.landtotal_hight,
                   }


               }).then(response=>{
                  // alert(response.data);
                   console.log(response.data);

                   if (response.data['status'] == 100) {
                       swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });
                       setTimeout(function () {
                           window.location.assign('/admin/Estatelist');
                       },2000);
                   }


               },response=>{
                   swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                       button: "باشه"
                   });
                   this.error=1;
                   console.log("error");
               });*/


        },

        CheckMobile: function (event) {

            alert();


        },
        /******************Get Value Data Server*****************/
        checkForm: function (e) {
            alert();
            if (this.name && this.age) {
                return true;
            }

            this.errors = [];

            if (!this.RoomNumber_user) {
                this.errors.push('Name required.');
            }
            if (!this.floor_user) {
                this.errors.push('Age required.');
            }

            e.preventDefault();
        },


        getRegion: function () {


            axios.get('/getRegion').then(response => {

                this.regions = response.data;
            });

        },
        getUsageType: function () {

            axios.get('/getUsageType').then(response => {


                this.UsageTypes = response.data;
            });

        },
        getEstateOwnerShip: function () {

            axios.get('/getEstateOwnerShip').then(response => {


                this.EstateOwnerShips = response.data;
            });

        },
        getPossibilities: function () {

            axios.get('/getPossibilities').then(response => {


                this.Possibilities = response.data;
            });

        },
        getEstate: function () {

            axios.get('/getEstate').then(response => {


                this.estatlist = response.data;
            });

        },
        getEstatetype: function () {

            axios.get('/getEstatetype').then(response => {


                this.Estatetypes = response.data;
            });

        },

        /****************Upload APK Version******************************/

        UploadAPK: function () {


            if (this.Version == '') {
                swal(" خطا ", "لطفا شماره نسخه را وارد کنید", "error", {
                    button: "باشه"
                });
                return false;

            } else if (this.ForceUpdate == '') {
                swal(" خطا ", "لطفا وضعیت دریافت اپلیکشین را مشخص کنید", "error", {
                    button: "باشه"
                });
                return false;

            }

            //let currentObj = this;

            /*  const config = {
                  headers: { 'content-type': 'multipart/form-data' }
              }*/


            let formData = new FormData();

            formData.append('file', this.file);
            formData.append('Version', this.Version);
            formData.append('ForceUpdate', this.ForceUpdate);

            let loader = this.$loading.show({

                loader: 'bars'

            });


            axios.post('/admin/UploadAPK', formData)
                .then(function (response) {


                    if (response.data['status'] == 100) {


                        swal(" خطا ", this.errors, "error", {
                            button: "باشه"
                        });
                    } else if (response.data['status'] == 200) {

                        loader.hide();
                        swal("ثبت موفق ", "نسخه جدید اپلود آپدیت شد", "success", {
                            button: "باشه"
                        });
                        this.successStatus = response.data.successStatus;
                        /* setTimeout(function() {



                         },2000);*/


                        /* setTimeout(function () {


                                 loader.hide();
                                 this.isLoading = false
                             //  window.location.assign('/admin/SetTimeVisit');
                           },2000);*/

                        /* setTimeout(() => {

                         },5000)*/

                    }
                }).catch(error => {

                console.error(error);
                // currentObj.output = error;

            });


        },

        onFileChange(e) {


            console.log(e.target.files[0]);
            this.file = e.target.files[0];
        },


        /****************Visit******************************/

        AddVisit: function () {


            var selected_Estate = $("#selected_Estate").val();
            var selected_emails = $("#selected_emails").val();

            axios.post('/admin/AddSetTimeVisit', {
                selected_Estate: selected_Estate,
                selected_emails: selected_emails,
                FullnameBuyer: this.FullnameBuyer,
                /*   FullnameSeller:this.FullnameSeller,*/
                TellBuyer: this.TellBuyer,
                /*   TellSeller:this.TellSeller,
                   priceEstate:this.priceEstate,*/
                /*  AddressEstate:this.AddressEstate,*/
                DateVisit: this.DateVisit,
                TimeVisit: this.TimeVisit,
                DescriptionVisi: this.DescriptionVisi,

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal(" خطا ", this.errors, "error", {
                        button: "باشه"
                    });
                } else if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "بازدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        window.location.assign('/admin/SetTimeVisit');
                    }, 2000);

                }


            }).catch(error => {
                console.error(error);

                this.FullnameBuyer = error.response.data.error.FullnameBuyer;
                this.FullnameSeller = error.response.data.error.FullnameSeller

            });
        },


        DeleteSetTimeVisit: function (id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی بازدید  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteSetTimeVisit', {

                        id: id

                    }).then(response => {


                        if (response.data['status'] == 200) {
                            swal("بازدید مورد نظر شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/SetTimeVisit');
                            }, 2000);
                        } else {

                            swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                                button: "باشه"
                            });
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });
        },
        SearchUser() {

            if (this.FindUser.length > 3) {
                axios.post('/admin/GetInfoUser', {

                    FindUser: this.FindUser,

                }).then(response => {


                    if (response.data['status'] == 200) {
                        $('.search-mailing-users').removeClass('hidden').html(response.data['result']);

                    } else {
                        $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                    }

                }, response => {
                    $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                });
            }

        },
        FindEstate() {


            if (this.codeEstate.length > 0) {
                axios.post('/admin/GetInfoEstate', {

                    codeEstate: this.codeEstate,

                }).then(response => {


                    if (response.data['status'] == 200) {
                        $('.search-mailing-Estate').removeClass('hidden').html(response.data['result']);

                    } else {
                        $('.search-mailing-Estate').removeClass('hidden').html('کاربری یافت نشد');
                    }

                }, response => {
                    $('.search-mailing-users').removeClass('hidden').html('کاربری یافت نشد');
                });
            }

        },


        /***************EstateType*********************/



        DeleteFavorite: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی نوع ملک نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/DeleteFavorite', {

                        Id: Id

                    }).then(response => {


                        alert('حذف موفق آمیز بود');
                        setTimeout(function () {
                            window.location.assign('/admin/NewEstateType');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        EditEstateType: function (Id) {


            axios.post('EditEstateType', {

                Id: Id,
                NameEditTypeEstate: this.NameEditTypeEstate


            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/NewEstateType');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },


        SendCode: function (Id) {


            var CodeSMS = $("#CodeSMS").val();


            if (Id) {
                axios.post('/admin/SendSMSCode', {


                    Id: Id,
                    CodeSMS: CodeSMS,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('عملیات بررسی با موفقیت انجام شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('عملیات ناموفق بود مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }

        },
        ResendRequest: function (Id) {


            if (Id) {
                axios.post('/admin/ResendRequest', {


                    Id: Id,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('عملیات بررسی با موفقیت انجام شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('عملیات ناموفق بود مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }

        },
        AddNoteRequest: function (Id) {


            // var text= $("textarea[name='textNote']").val();
            // var text= $("#exampleFormControlTextarea1").val();


            if (this.textNote == "") {
                toastr.info('لطفا توضیحات را وارد کنید');

            }


            if (this.textNote != '') {
                axios.post('/admin/AddRequestNote', {

                    Id: Id,
                    text: this.textNote,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('با موفقیت توضیحات  شما ثبت شد');

                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        ContactUSReuqest: function () {


            if (this.nameOffer == "") {
                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.textOffer == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#textOffer").addClass('input_alert');
                $('#textOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.textOffer != "") {
                $("#textOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.emailContactus == "") {
                toastr.info('لطفا آدرس ایمیل خود را وارد کنید');
                $("#emailContactus").addClass('input_alert');
                $('#emailContactus').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.emailContactus != "") {
                $("#emailContactus").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '' && this.textOffer != ''
                && this.emailContactus != '') {
                axios.post('AddNewContactus', {


                    name: this.nameOffer,
                    mobile: this.mobileOffer,
                    emailContactus: this.emailContactus,
                    message: this.textOffer,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('تشکر از شما در اسرع وقت  با شما تماس خواهیم گرفت');

                        setTimeout(function () {
                            window.location.assign('/');
                        }, 2000);

                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        RequestEstate: function () {


            /* alert(this.namereq);
             alert(this.estatetypereq);
             alert(this.pricereq);
             alert(this.position_type_req);
             alert(this.regionselectreq);
             alert(this.regionselectreq);
             alert(this.RoomNumberreq);
             alert(this.mobilereq);*/

            axios.post('/admin/AddRequestEstate', {
                namereq: this.namereq,
                estatetypereq: this.estatetypereq,
                pricereq: this.pricereq,
                position_type_req: this.position_type_req,
                regionselectreq: this.regionselectreq,
                RoomNumberreq: this.RoomNumberreq,
                mobilereq: this.mobilereq,
                floorreq: this.floorreq,
                LandTotalSquarereq: this.LandTotalSquarereq,
            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "درخواست ملک  جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/listRequest');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        /***************OwenshipType*********************/


        DeleteTeam: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی تیم   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('DeleteTeam', {

                        Id: Id

                    }).then(response => {


                        swal("نوع مالکیت  شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });
                        setTimeout(function () {
                            window.location.assign('/admin/MangTeam');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },


        /***************PossibiliesType*********************/


        handleFileUpload() {
            this.file = this.$refs.file.files[0];

        },
        onImageChangeFile(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImageFile(files[0]);
        },
        createImageFile(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        DateInputNew(type, event) {

            if (type == 'catedescedit') {
                this.catedesc = event.target.value;

            }
            if (type == 'catenameedit') {
                this.catename = event.target.value;

            }
            if (type == 'titlebrand') {
                this.catename = event.target.value;

            }
            if (type == 'titleGroup') {
                this.catename = event.target.value;

            }
            if (type == 'titlePost') {
                this.titlePost = event.target.value;

            }
            if (type == 'postprice') {
                this.postprice = event.target.value;

            }


        },


        AddBrand: function () {

            let loader = Vue.use(Loading, {

                dark: true, // default false
                text: 'لطفا شکیبا باشید سیستم در حال آپلود تصویر', // default 'Loading'
                loading: true, // default false
                background: '#fff',
                classes: ['myclass'] // array, object or string

            });

            let formData = new FormData();
            formData.append('action', 'AddBrand');
            formData.append('catename', this.catename);
            formData.append('file', this.image);

            axios.post('/admin/ActionServer',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت برند ", "برند جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    this.$loading(false);
                    setTimeout(function () {
                        window.location.assign('Brand');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        RemoveBrnad: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveBrnad',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("دسته  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("برند مورد نظر استفاده شده برای محصولات قادر به حذف نیستید اول باید محصول را حذف کنید ", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Brand');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        EditBrand: function (Id) {


            let formData = new FormData();
            formData.append('action', 'EditBrand');
            formData.append('Id', Id);
            formData.append('catename', this.catename);
            formData.append('file', this.image);


            axios.post('/admin/ActionServer',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "برند  با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('Brand');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        AddProductGroup: function () {


            axios.post('/admin/ActionServer', {

                action: 'AddProductGroup',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "گروه بندی جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductGroup');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        DeleteProductGroup: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteProductGroup',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("گروه بندی  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("گروه بندی دارای محصولات هست قادر به حذف به آن نیستید ", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('ProductGroup');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('ProductGroup');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        EditProductGroup: function (Id) {


            axios.post('/admin/ActionServer', {

                action: 'EditProductGroup',
                Id: Id,
                catename: this.catename,

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "دسته جدید با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductGroup');
                    }, 2000);
                } else if (response.data['status'] == 100) {
                    swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductGroup');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },


        ItemCategory: function (event) {

            var cateid = event.target.value;

            axios.post('/admin/ActionServer', {
                action: 'GetSubCate',
                cateid: cateid,

            }).then(response => {

                $("#Subcate").html(response.data);

            }, response => {

                this.error = 1;
                console.log("error");
            });
        },
        ItemHasStock: function () {

            var quantity_stock = $(".quantity_stock").hide();
            if (this.has_stock) {

                quantity_stock.show();
            } else {
                quantity_stock.hide();
            }


        },
        ChangeHasStock: function (Id, type) {


            if (type == 1) {
                swal("لطفا موجود انبار را وارد کنید", {
                    content: "input",
                }).then((value) => {
                    //   swal(`You typed: ${value}`);
                    axios.post('/admin/ActionServer', {
                        action: 'ChangeHasStock',
                        Id: Id,
                        type: type,
                        value: value,

                    }).then(response => {

                        if (response.data.status == 200) {

                            swal("موجودی  ", "وضعیت انبار با موفقیت اپدیت شد", "success", {
                                button: "تشکر"
                            });

                            window.location.assign('/admin/ProductEdit/' + response.data.link);

                        } else {
                            swal("خطا", "مجددا تلاش کنید خطا", "error", {
                                button: "باشه"
                            });
                        }


                    }, response => {
                        console.log("error");
                    });
                });
            } else {
                axios.post('/admin/ActionServer', {
                    action: 'ChangeHasStock',
                    Id: Id,
                    type: type,

                }).then(response => {

                    if (response.data.status == 200) {

                        swal("انبار", "وضعیت انبار با موفقیت اپدیت شد", "success", {
                            button: "تشکر"
                        });

                        window.location.assign('/admin/ProductEdit/' + response.data.link);

                    } else {
                        swal("خطا", "مجددا تلاش کنید خطا", "error", {
                            button: "باشه"
                        });
                    }


                }, response => {
                    console.log("error");
                });
            }


        },

        ChangeFeatureIs: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeFeatureIs',
                Id: Id,
                type: type,

            }).then(response => {

                if (response.data.status == 200) {

                    swal("بعنوان پیشنهاد ویژه", "پیشنهاد ویژه  با موفقیت آپدیت شد", "success", {
                        button: "تشکر"
                    });

                    window.location.assign('/admin/ProductEdit/' + response.data.link);

                } else {
                    swal("خطا", "مجددا تلاش کنید خطا", "error", {
                        button: "باشه"
                    });
                }


            }, response => {
                console.log("error");
            });

        },

        ChangeISSellable: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeISSellable',
                Id: Id,
                type: type,

            }).then(response => {

                if (response.data.status == 200) {

                    swal("وضعیت فروش", "وضعیت فروش با موفقیت آپدیت شد", "success", {
                        button: "تشکر"
                    });

                    window.location.assign('/admin/ProductEdit/' + response.data.link);

                } else {
                    swal("خطا", "مجددا تلاش کنید خطا", "error", {
                        button: "باشه"
                    });
                }


            }, response => {
                console.log("error");
            });

        },

        ChangeStatusProduct: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeStatusProduct',
                Id: Id,
                type: type,

            }).then(response => {

                if (response.data.status == 200) {

                    swal("وضعیت نمایش محصول", "وضعیت نمایش محصول با موفقیت اپدیت شد", "success", {
                        button: "تشکر"
                    });

                    window.location.assign('/admin/ProductEdit/' + response.data.link);

                } else {
                    swal("خطا", "مجددا تلاش کنید خطا", "error", {
                        button: "باشه"
                    });
                }


            }, response => {
                console.log("error");
            });

        },

        ChangeStatusBlog: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeStatusBlog',
                Id: Id,
                type: type,

            }).then(response => {

                if (response.data.status == 200) {

                    swal("وضعیت نمایش مقاله", "وضعیت نمایش مقاله با موفقیت اپدیت شد", "success", {
                        button: "تشکر"
                    });

                    window.location.assign('/admin/BlogEdit/' + response.data.link);

                } else {
                    swal("خطا", "مجددا تلاش کنید خطا", "error", {
                        button: "باشه"
                    });
                }


            }, response => {
                console.log("error");
            });

        },
        ChangeMaintenanceMode: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeMaintenanceMode',
                Id: Id,
                type: type,

            }).then(response => {

                if (response.data.status == 200) {

                    swal("وضعیت نمایش سایت", "وضعیت نمایش سایت با موفقیت اپدیت شد", "success", {
                        button: "تشکر"
                    });

                    //  $("#previewSite").html('<a target="_blank" href="/" class="btn btn-success">نمایش  سایت</a>');
                    window.location.assign('Setting');


                } else {
                    swal("خطا", "مجددا تلاش کنید خطا", "error", {
                        button: "باشه"
                    });
                }


            }, response => {
                console.log("error");
            });

        },

        publishProduct: function () {


            // let formData = new FormData();
            let dataform = new FormData();


            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            var brandname = $('#brandname').find(':selected').val();
            var productgroup = $('#productgroup').find(':selected').val();
            var Subcate = $('#Subcate').find(':selected').val();
            var typecoffe = $('#typecoffe').find(':selected').val();
            var typeMill = $('#typeMill').find(':selected').val();
            var packpage = $('#packpage').find(':selected').val();
            var prodweight = $('#prodweight').find(':selected').val();


            /*axios.post('/admin/ActionServer',{
                action:'AddProduct',
                CodeProduct: this.CodeProduct,
                titleProduct: this.titleProduct,
                titleProductEn: this.titleProductEn,
                brandname:brandname,
                productgroup:productgroup,
                Subcate:Subcate,
                file:this.image,
                tagproduct: this.tagproduct,
                keywordproduct: this.keywordproduct,
                summernote: $('#summernote').summernote('code'),
                has_stock: this.has_stock,
                quantity_stock: this.quantity_stock,
                is_featured: this.is_featured,
                is_sellable: this.is_sellable,
                price_product: this.price_product,
                is_basket_discount: this.is_basket_discount,
                statusproduct: this.statusproduct,
                formaData:this.images,

            })*/

            var brandname = $('#brandname').find(':selected').val();
            var productgroup = $('#productgroup').find(':selected').val();
            var Subcate = $('#Subcate').find(':selected').val();

            dataform.append('action', 'AddProduct');
            dataform.append('CodeProduct', this.CodeProduct);
            dataform.append('titleProduct', this.titleProduct);
            dataform.append('titleProductEn', this.titleProductEn);
            dataform.append('brandname', brandname);
            dataform.append('productgroup', productgroup);
            dataform.append('Subcate', Subcate);
            dataform.append('typecoffe', typecoffe);
            dataform.append('typeMill', typeMill);
            dataform.append('packpage', packpage);
            dataform.append('prodweight', prodweight);
            dataform.append('tagproduct', this.tagproduct);
            dataform.append('keywordproduct', this.keywordproduct);
            dataform.append('shortDsec', $('.summernote').summernote('code'));
            dataform.append('DescMain', $('.summernotemain').summernote('code'));
            dataform.append('has_stock', this.has_stock);
            dataform.append('quantity_stock', this.quantity_stock);
            dataform.append('is_featured', this.is_featured);
            dataform.append('is_sellable', this.is_sellable);
            dataform.append('price_product', this.price_product);
            dataform.append('is_basket_discount', this.is_basket_discount);
            dataform.append('statusproduct', this.statusproduct);
            dataform.append('formaData', this.images);
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            let loader = Vue.use(Loading, {

                dark: true, // default false
                text: 'لطفا شکیبا باشید در حال آپلود تصاویر و ثبت ....', // default 'Loading'
                loading: true, // default false
                background: '#fff',
                classes: ['myclass'] // array, object or string

            });

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {


                if (response.data.status == 200) {
                    swal("محصول جدید", "محصول جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                }
                /*  swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                      button: "باشه"
                  });
                  if (response.data.status == 200) {
                      swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                          button: "باشه"
                      });
                      window.location.reload();
                      /!*   setTimeout(function () {
                             window.location.assign('/admin/AddImage/'+response.data.id);
                         },4000);*!/
                  }else{
                      console.log(response.data);

                  }*/


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        publishProductTest: function () {


            let dataform = new FormData();
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });
            dataform.append('action', 'AddProductTest');
            dataform.append('formaData', this.images);
            dataform.append('file', this.image);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ثبت موفق ", "محصول جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        publishBlog: function () {


            // let formData = new FormData();
            let dataform = new FormData();

            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            var categoryitem = $('#categoryitem').find(':selected').val();

            dataform.append('action', 'AddBlog');
            dataform.append('titleProduct', this.titleProduct);
            dataform.append('AuthorBlog', this.AuthorBlog);
            dataform.append('categoryitem', categoryitem);
            dataform.append('tagproduct', this.tagproduct);
            dataform.append('keywordproduct', this.keywordproduct);
            dataform.append('shortDsec', $('.summernote').summernote('code'));
            dataform.append('DescMain', $('.summernotemain').summernote('code'));
            dataform.append('statusproduct', this.statusproduct);
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);


                /*  swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                      button: "باشه"
                  });
                  if (response.data.status == 200) {
                      swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                          button: "باشه"
                      });
                      window.location.reload();
                      /!*   setTimeout(function () {
                             window.location.assign('/admin/AddImage/'+response.data.id);
                         },4000);*!/
                  }else{
                      console.log(response.data);

                  }*/
                if (response.data.status == 200) {
                    swal("ثبت موفق ", "مقاله جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    window.location.assign('listblog');


                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UploadImageMainProduct: function (Id) {


            let dataform = new FormData();
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            dataform.append('action', 'UploadImageMainProduct');
            dataform.append('ProdId', Id);
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("بارگذاری موفق تصویر محصول", "تصویر اصلی محصول با موفقیت آپلود شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UploadImageLogoSite: function () {


            let dataform = new FormData();
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            dataform.append('action', 'UploadImageLogoSite');
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("بارگذاری موفق تصویر محصول", "تصویر اصلی محصول با موفقیت آپلود شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UploadSliderSite: function () {


            let dataform = new FormData();
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            var title_slider = $("#title_slider").val();
            var desc_text_slider = $("#desc_text_slider").val();
            var link_slider = $("#link_slider").val();

            var status_slider = $('input[name="status_slider"]:checked').val();

            dataform.append('action', 'UploadSliderSite');
            dataform.append('title_slider', title_slider);
            dataform.append('desc_text_slider', desc_text_slider);
            dataform.append('link_slider', link_slider);
            dataform.append('status_slider', status_slider);
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("بارگذاری موفق تصویر محصول", "تصویر اصلی محصول با موفقیت آپلود شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UploadImageMainBlog: function (Id) {


            let dataform = new FormData();
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });


            dataform.append('action', 'UploadImageMainBlog');
            dataform.append('ProdId', Id);
            dataform.append('file', this.image);


            /*   alert( this.image);
               console.log(this.image);
               console.log(dataform);*/

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("بارگذاری موفق تصویر محصول", "تصویر اصلی محصول با موفقیت آپلود شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UpdateProductBasic: function (Id) {


            var cateprodct = $('#cateprodct').find(':selected').val();
            var brandname = $('#brandname').find(':selected').val();
            var groupname = $('#groupname').find(':selected').val();
            var typecoffe = $('#typecoffe').find(':selected').val();
            var typeMill = $('#typeMill').find(':selected').val();
            var productname = $("#productname").val();
            var price = $("#price").val();
            var is_basket_discount = $("#is_basket_discount").val();


            let dataform = new FormData();

            dataform.append('action', 'UpdateProductBasic');
            dataform.append('ProdId', Id);
            dataform.append('productname', productname);
            dataform.append('cateprodct', cateprodct);
            dataform.append('brandname', brandname);
            dataform.append('groupname', groupname);
            dataform.append('typeMill', typeMill);
            dataform.append('typecoffe', typecoffe);
            dataform.append('price', price);
            dataform.append('is_basket_discount', is_basket_discount);

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("مشخصات اصلی", "با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UpdateBlogBasic: function (Id) {


            var cateprodct = $('#cateprodct').find(':selected').val();
            var productname = $("#productname").val();
            var author = $("#author").val();


            let dataform = new FormData();

            dataform.append('action', 'UpdateBlogBasic');
            dataform.append('ProdId', Id);
            dataform.append('productname', productname);
            dataform.append('cateprodct', cateprodct);
            dataform.append('author', author);

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("مشخصات اصلی", "با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UpdateSettingBasic: function (Id) {


            //  var cateprodct = $('#cateprodct').find(':selected').val();
            var site_name = $("#site_name").val();
            var enamd = $("#enamd").val();
            var address = $("#address").val();

            var site_title = $("#site_title").val();
            var site_keywords = $("#site_keywords").val();
            var emails_site = $("#emails_site").val();
            var telephone_one_shop = $("#telephone_one_shop").val();
            var telephone_two_shop = $("#telephone_two_shop").val();
            var site_desc = $("#site_desc").val();


            let dataform = new FormData();

            dataform.append('action', 'UpdateSettingBasic');
            dataform.append('site_name', site_name);
            dataform.append('enamd', enamd);
            dataform.append('address', address);
            dataform.append('site_title', site_title);
            dataform.append('site_keywords', site_keywords);
            dataform.append('emails_site', emails_site);
            dataform.append('telephone_one_shop', telephone_one_shop);
            dataform.append('telephone_two_shop', telephone_two_shop);
            dataform.append('site_desc', site_desc);

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UpdateSettingAbout: function (Id) {


            //  var cateprodct = $('#cateprodct').find(':selected').val();

            var about_page = $("#about_page").val();
            let dataform = new FormData();
            dataform.append('action', 'UpdateSettingAbout');
            dataform.append('about_page', about_page);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        Printreport: function () {


            //  var cateprodct = $('#cateprodct').find(':selected').val();


            let dataform = new FormData();
            dataform.append('action', 'Exportreport');


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UpdateReadNoti: function (Id, seen) {


            let dataform = new FormData();
            dataform.append('action', 'UpdateSeenNoti');
            dataform.append('Id', Id);
            dataform.append('seen', seen);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("اعلان", "اعلان با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        UpdateSettingBankSaman: function () {


            var SamanMerchant = $("#SamanMerchant").val();

            let dataform = new FormData();
            dataform.append('action', 'UpdateSettingBankSaman');
            dataform.append('SamanMerchant', SamanMerchant);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UpdateSettingBankSepehr: function () {


            var SephrMerchant = $("#SephrMerchant").val();

            let dataform = new FormData();
            dataform.append('action', 'UpdateSettingBankSepehr');
            dataform.append('SephrMerchant', SephrMerchant);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UpdateSettingEmailPort: function () {

            var smtpOrMail = $('input[name="SMTPType"]:checked').val();
            var smtp_encryption = $('input[name="smtp_encryption"]:checked').val();
            //    alert(smtp_encryption);

            var smtp_host = $("#smtp_host").val();
            var smtp_username = $("#smtp_username").val();
            var smtp_password = $("#smtp_password").val();
            var smtp_port = $("#smtp_port").val();

            let dataform = new FormData();
            dataform.append('action', 'UpdateSettingEmailPort');
            dataform.append('smtp_host', smtp_host);
            dataform.append('smtp_username', smtp_username);
            dataform.append('smtp_password', smtp_password);
            dataform.append('smtp_port', smtp_port);
            dataform.append('smtp_encryption', smtp_encryption);
            dataform.append('smtpOrMail', smtpOrMail);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("تنظیمات", "تنظیمات با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        UpdateProductSEO: function (Id) {


            var keywords = $('textarea#keywords').val();
            // $('textarea#keywords').val();

            var TagsData = $("#TagsData").val();
            var shortDesc = $('.summernote').summernote('code');
            var MainDesc = $('.summernotemain').summernote('code');


            let dataform = new FormData();

            dataform.append('action', 'UpdateProductSEO');
            dataform.append('ProdId', Id);
            dataform.append('keywords', keywords);
            dataform.append('TagsData', TagsData);
            dataform.append('shortDesc', shortDesc);
            dataform.append('MainDesc', MainDesc);


            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                console.log(response.data);

                if (response.data.status == 200) {
                    swal("محتوا", "محتوا با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        UpdateCheckNoti: function (Id) {


            axios.post('/admin/ActionServer', {
                action: 'UpdateCheckNoti',
                Id: Id

            }).then(response => {

            }, response => {
                console.log("error");
            });


        },
        UpdatePriceDelivery: function (PostId) {

            axios.post('UpdateCartPricePost', {
                PostId: PostId,
            }).then(response => {


                window.location.reload();

            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.$loading(false);

                this.error = 1;
                console.log("error");
            });
        },
        UpdateAddress: function (AddressId) {

            axios.post('UpdateAddress', {
                AddressId: AddressId,
            }).then(response => {

                window.location.reload();

            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.$loading(false);

                this.error = 1;
                console.log("error");
            });
        },
        UpdateCart: function (Id, number) {

            /*  let loader = Vue.use(Loading, {

                  dark: true, // default false
                  text: 'سبد خرید در حال آپدیت...', // default 'Loading'
                  loading: true, // default false
                  background: '#fff',
                  classes: ['myclass'] // array, object or string

              });*/


            axios.post('UpdateCart', {
                cartId: Id,
                quantity: number
            }).then(response => {

                console.log(response.data);
                // alert(response.data.status);
                if (response.data.status === 200) {


                    /*  swal("سبد خرید", "با موفقیت سبد خرید اپدیت شد", "success", {
                          button: "تشکر"
                      });*/
                    // this.$loading(false);
                    // $("#dataCart").html(response.data.view);
                    window.location.reload();
                    /* setTimeout(function (){
                         window.location.reload();
                     },4000)*/

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.$loading(false);

                this.error = 1;
                console.log("error");
            });
        },


        UploadGalleryProduct: function (Id) {


            let dataform = new FormData();
            dataform.append('action', 'UploadGalleryProduct');
            dataform.append('ProdId', Id);
            this.files.forEach(file => {
                dataform.append('images[]', file, file.name);
            });

            let loader = Vue.use(Loading, {

                dark: true, // default false
                text: 'لطفا شکیبا باشید سیستم در حال آپلود ...', // default 'Loading'
                loading: true, // default false
                background: '#fff',
                classes: ['myclass'] // array, object or string

            });

            axios.post('/admin/ActionServer',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(response => {

                //  console.log(response.data);
                if (response.data.status == 200) {
                    swal("گالری محصول", "گالری محصول با موفقیت بارگذاری و آپلود شد", "success", {
                        button: "باشه"
                    });

                    this.$loading(false);

                    window.location.reload();

                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        RemoveGalleryImageProduct: function (Id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف تصویر گالری قابل بازیابی نیست !",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveGalleryImageProduct',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("تصویر از گالری محصول   با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });

                            window.location.reload();

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });

        },
        DeleteSliderImage: function (Id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف تصویر اسلایدر قابل بازیابی نیست !",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteSliderImage',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("تصویر از لیست اسلایدر سایت حذف شد ", {
                                icon: "success",
                                button: "باشه"
                            });

                            window.location.reload();

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });

        },

        DeleteAllGalleryImage: function (prodId) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف  کل تصویر گالری قابل بازیابی نیست !",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteAllGalleryImage',
                        prodId: prodId

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("همه تصویر گالری محصول با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });

                            window.location.reload();

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            window.location.reload();
                        } else if (response.data.status == 404) {
                            swal("تصویر برای گالری محصول ثبت نشده !", {
                                icon: "info",
                                button: "باشه"
                            });
                            window.location.reload();
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });

        },
        DeleteAddress: function (AddressId) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "قصد حذف آدرس جاری دارید !",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/User/ActionServer', {
                        action: 'DeleteAddress',
                        AddressId: AddressId

                    }).then(response => {

                        if (response.data.status == 200) {

                            swal("آدرس مورد نظر با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });

                            window.location.reload();

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            window.location.reload();
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });

        },

        AddCategory: function () {

            var parentcateId = $('#parentcateId').find(':selected').val();

            axios.post('/admin/ActionServer', {

                action: 'AddCate',
                catename: this.catename,
                catedesc: this.catedesc,
                parentcateId: parentcateId

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "دسته جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('Category');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddTypeCoffeNew: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            axios.post('/admin/ActionServer', {

                action: 'AddTypeCoffeNew',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "قهوه جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('TypeCoffee');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddPackageProduct: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            axios.post('/admin/ActionServer', {

                action: 'AddPackageProduct',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "بسته بندی جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProudctPackage');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddWeightProduct: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            axios.post('/admin/ActionServer', {

                action: 'AddWeightProduct',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "بسته بندی جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProudctWeight');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddProductPost: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            var statusPost = $('input[name="SMTPType"]:checked').val();

            axios.post('/admin/ActionServer', {

                action: 'AddProductPost',
                titleService: this.titleService,
                typeService: this.typeService,
                pricePost: this.pricePost,
                statusPost: statusPost

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع سرویس جدید پستی با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductPost');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddDocupon: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            var statusPost = $('input[name="SMTPType"]:checked').val();

            axios.post('/admin/ActionServer', {

                action: 'AddDocupon',
                titleService: this.titleService,
                typeService: this.typeService,
                pricePost: this.pricePost,
                statusPost: statusPost

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع سرویس جدید پستی با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductPost');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddTypeMill: function () {

            //  var parentcateId = $('#parentcateId').find(':selected').val();

            axios.post('/admin/ActionServer', {

                action: 'AddTypeMill',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "قهوه جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('TypeMill');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddBlogCategory: function () {


            axios.post('/admin/ActionServer', {

                action: 'AddBlogCategory',
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "دسته جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('CategoryBlog');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditCategory: function (Id) {

            var catename = $('#catenameedit').val();
            var catedesc = $('#catedescedit').val();

            // var parentcateId = $('#parentcateIdedit').find(':selected').val();
            var parentcateId = $('#parentcateIdedit :selected').val();


            axios.post('/admin/ActionServer', {

                action: 'EditCategory',
                Id: Id,
                catename: this.catename,
                catedesc: this.catedesc,
                parentcateId: this.parentcateId

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "دسته جدید با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('Category');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditCoffeeType: function (Id) {

            var catename = $('#catenameedit').val();
            axios.post('/admin/ActionServer', {

                action: 'EditCoffeeType',
                Id: Id,
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "نوع قهوه جدید با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('TypeCoffee');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditProductWeight: function (Id) {

            var catename = $('#catenameedit').val();
            axios.post('/admin/ActionServer', {

                action: 'EditProductWeight',
                Id: Id,
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "وزن محصول با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProudctWeight');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditProductPost: function (Id) {


            axios.post('/admin/ActionServer', {

                action: 'EditProductPost',
                Id: Id,
                titlePost: this.titlePost,
                postprice: this.postprice,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "سرویس پستی مورد نظر با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProductPost');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditProductPackage: function (Id) {

            var catename = $('#catenameedit').val();
            axios.post('/admin/ActionServer', {

                action: 'EditProductPackage',
                Id: Id,
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "بسته بندی محصول با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('ProudctPackage');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditTypeMill: function (Id) {

            var catename = $('#catenameedit').val();
            axios.post('/admin/ActionServer', {

                action: 'EditTypeMill',
                Id: Id,
                catename: this.catename,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش  ", "نوع آسیاب  با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('TypeMill');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        EditProfileUser: function (Id) {

            var usernameEdit = $('#usernameEdit').val();
            var mobileEdit = $('#mobileEdit').val();
            var userStatus = $('input[name="userStatus"]').val();


            axios.post('/admin/ActionServer', {

                action: 'EditProfileUser',
                Id: Id,
                usernameEdit: usernameEdit,
                mobileEdit: mobileEdit,
                userStatus: userStatus,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("پروفایل ", "پروفایل کاربر با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });

                    window.location.reload();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditProfileByUser: function (Id) {

            var usernameEdit = $('#usernameEdit').val();
            var mobileEdit = $('#mobileEdit').val();
            var userStatus = $('input[name="userStatus"]').val();


            axios.post('/User/ActionServer', {

                action: 'EditProfileByUser',
                Id: Id,
                usernameEdit: usernameEdit,
                mobileEdit: mobileEdit,
                userStatus: userStatus,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("پروفایل ", "پروفایل کاربر با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });

                    window.location.reload();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        EditPassword: function (Id) {

            var newpassword = $('#newpassword').val();

            axios.post('/admin/ActionServer', {

                action: 'EditPassword',
                Id: Id,
                newpassword: newpassword,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("تغییر رمز عبور ", "رمز عبور با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditPasswordByUser: function (Id) {

            var newpassword = $('#newpassword').val();

            axios.post('/User/ActionServer', {

                action: 'EditPasswordByUser',
                Id: Id,
                newpassword: newpassword,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("تغییر رمز عبور ", "رمز عبور با موفقیت اپدیت شد", "success", {
                        button: "باشه"
                    });
                    window.location.reload();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        EditCategoryBlog: function (Id) {

            var catename = $('#catenameedit').val();


            axios.post('/admin/ActionServer', {

                action: 'EditCategoryBlog',
                Id: Id,
                catename: this.catename,

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش موفق ", "دسته جدید با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('CategoryBlog');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        RemoveProduct: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveProduct',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("محصول شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('listProduct');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveCategory: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteCate',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("دسته  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("دسته مورد نظر شما دارای زیر دسته هست لطفا اول زیر دسته ها را حذف کنید بعد دسته اصلی", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveTypeCoffe: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveTypeCoffe',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("نوع قهوه  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("نوع قهوه انتخاب شده قابل حذف نیست چون محصولی از قبل برای این نوع انتخاب شده", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('TypeCoffee');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveProductPack: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveProductPack',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("بسته بندی   شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("نوع قهوه انتخاب شده قابل حذف نیست چون محصولی از قبل برای این نوع انتخاب شده", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('TypeCoffee');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveProductPost: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveProductPost',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("سرویس مورد نظر شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("نوع قهوه انتخاب شده قابل حذف نیست چون محصولی از قبل برای این نوع انتخاب شده", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('ProductPost');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('ProductPost');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveProductWeight: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveProductWeight',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("وزن محصول  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("نوع قهوه انتخاب شده قابل حذف نیست چون محصولی از قبل برای این نوع انتخاب شده", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('TypeCoffee');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveTypeMill: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveTypeMill',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("نوع آسیاب  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("نوع آسیاب مورد نظر شما دارای محصول هست قابل حذف نیست !!", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('TypeMill');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        RemoveBlog: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveBlog',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("مقاله  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("دسته مورد نظر شما دارای زیر دسته هست لطفا اول زیر دسته ها را حذف کنید بعد دسته اصلی", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        RemoveBlogCategory: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {

                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'RemoveBlogCategory',
                        Id: Id

                    }).then(response => {

                        if (response.data.status == 200) {
                            swal("دسته  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);


                        } else if (response.data.status == 201) {

                            swal("دسته مورد نظر شما دارای مقاله هست لطفا اول باید مقاله را حذف کنید بعد دسته مورد نظر !", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('CategoryBlog');
                            }, 40000);
                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('CategoryBlog');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },


        DeletePossibilitiesEstate: function (Id, type) {


            var link = '';

            if (type == 'User') {

                link = '/User/ActionServer';
            } else if (type == 'admin') {
                link = '/admin/ActionServer';
            }

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی نوع امکانات نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {


                    axios.post(link, {

                        action: 'DeletePossibilitiesEstate',
                        Id: Id,

                    }).then(response => {


                        swal("نوع امکانات  شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },


        /***************RegionType*********************/
        AddRegion: function () {

            axios.post('/admin/ActionServer', {

                action: 'NewRegion',
                NameRegion: this.NameRegion

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "منطقه جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Region');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        EditRegion: function (Id) {

            /*  let loader = this.$loading.show({

                  loader:'bars'

              });*/


            axios.post('/admin/ActionServer', {
                action: 'EditRegion',
                Id: Id,
                EditNameRegion: this.EditNameRegion

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Region');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteRegion: function (Id) {


            Swal.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                confirmButtonClass: 'btn btn-warning',
                cancelButtonClass: 'btn btn-danger ml-1',
                cancelButtonText: 'انصراف',
                buttonsStyling: false,
            }).then(function (result) {

                if (result.value) {

                    axios.post('/admin/ActionServer', {
                        action: 'DeleteRegion',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {

                            Swal.fire({
                                type: "success",
                                title: 'حذف',
                                text: 'منطقه مورد نظر با موفقیت حذف شد.',
                                confirmButtonClass: 'btn btn-success',
                                confirmButtonText: 'باشه',
                            });

                            window.location.assign('/admin/Region');
                        } else {
                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'لغو شد',
                        text: 'درخواست شما لغو شد',
                        type: 'error',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });


                }
            });


        },

        DeleteTran: function (type, Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteTran',
                        Id: Id,
                        type: type,

                    }).then(response => {


                        if (response.data.status == 200) {
                            swal("معامله  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });


                            setTimeout(function () {
                                window.location.assign('/admin/Tranasction/' + response.data.link);
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });

                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        DeleteApplicant: function (Id, type) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی متقاضی   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteApplicant',
                        Id: Id,
                        type: type

                    }).then(response => {


                        if (response.data.status == 200) {
                            swal("متقاضی  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });


                            setTimeout(function () {
                                window.location.assign('/admin/Applicant/' + response.data.link);
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });

                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },
        DeleteTenant: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی قرارداد   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteTenant',
                        Id: Id,


                    }).then(response => {


                        if (response.data.status == 200) {
                            swal("قرارداد  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });


                            setTimeout(function () {
                                window.location.assign('/admin/contract/');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });

                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },


        Test: function () {
            alert('sdfsdfdf');

        },
        DeleteTranscation: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/ActionServer', {
                        action: 'DeleteEstate',
                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {
                            swal("ملک  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });

                            setTimeout(function () {
                                window.location.assign('/admin/Tranasction');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        AddTypeEstate: function () {

            axios.post('/admin/ActionServer', {

                action: 'NewEstateType',
                NameTypeEstate: this.NameTypeEstate

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع ملک جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/NewEstateType');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditTypeEstate: function (Id) {

            /*  let loader = this.$loading.show({

                  loader:'bars'

              });*/


            axios.post('/admin/ActionServer', {
                action: 'EditTypeEstate',
                Id: Id,
                NameTypeEstate: this.NameTypeEstate

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/NewEstateType');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteEstateType: function (Id) {

            Swal.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                confirmButtonClass: 'btn btn-warning',
                cancelButtonClass: 'btn btn-danger ml-1',
                cancelButtonText: 'انصراف',
                buttonsStyling: false,
            }).then(function (result) {

                if (result.value) {

                    axios.post('/admin/ActionServer', {
                        action: 'DeleteEstateType',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {

                            Swal.fire({
                                type: "success",
                                title: 'حذف',
                                text: 'نوع ملک مورد نظر با موفقیت حذف شد.',
                                confirmButtonClass: 'btn btn-success',
                                confirmButtonText: 'باشه',
                            });

                            window.location.assign('/admin/NewEstateType');
                        } else {
                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'لغو شد',
                        text: 'درخواست شما لغو شد',
                        type: 'error',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });


                }
            });


        },

        AddOwenship: function () {

            axios.post('/admin/ActionServer', {

                action: 'NewOwenership',
                NameOwnership: this.NameOwnership

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع مالکیت جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/EstateOwnerShip');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditOwenership: function (Id) {

            axios.post('/admin/ActionServer', {
                action: 'EditOwenership',
                Id: Id,
                EditNameOwnership: this.EditNameOwnership

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/EstateOwnerShip');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteOwnership: function (Id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی معامله   نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {

                    axios.post('/admin/ActionServer', {
                        action: 'DeleteOwnership',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {

                            swal("نوع ملک مورد نظر با موفقیت حذف شد.", {
                                icon: "success",
                                button: "باشه"
                            });


                            window.location.assign('/admin/EstateOwnerShip');
                        } else {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal("حذف ناموفق مجددا تلاش کنید", {
                        icon: "warning",
                        button: "باشه"
                    });


                }
            });


        },

        AddPossibilities: function () {

            axios.post('/admin/ActionServer', {

                action: 'AddPossibilities',
                NamePossibity: this.NamePossibity

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع مالکیت جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Possibilities');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditPossibilities: function (Id) {


            axios.post('/admin/ActionServer', {
                action: 'EditPossibilities',
                Id: Id,
                EditNamePossibity: this.EditNamePossibity

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Possibilities');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeletePossibilities: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی نوع امکانات نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {

                    axios.post('/admin/ActionServer', {
                        action: 'DeletePossibilities',
                        Id: Id

                    }).then(response => {


                        if (response.data.status == 200) {


                            swal("نوع امکانات مورد نظر با موفقیت حذف شد.", {
                                icon: "success",
                                button: "باشه"
                            });
                            window.location.assign('/admin/Possibilities');
                        } else {
                            swal("حذف ناموفق بود", {
                                icon: "error",
                                button: "باشه"
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (result.dismiss === swal.DismissReason.cancel) {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });


                }
            });


        },

        AddUser: function () {

            axios.post('/admin/ActionServer', {

                action: 'AddUser',
                mobileuser: this.mobileuser,
                fullname: this.fullname,
                passworduser: this.passworduser,

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "کاربر جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddTransaction: function () {


            //  var regionselecttra= $("#regionselecttra option:selected").val();


            //var regionselecttra= $('#regionselecttra').find(":selected").val();
            //  var regionselecttra= $("#regionselecttra").prop('selectedIndex');
            //  var estatetypetra= $("#estatetypetra").prop('selectedIndex');
            // var estatetypetra= $('#estatetypetra').find(":selected").val();


            var region = $('#region').find(':selected').val();
            var estatetype = $('#estatetypetra').find(':selected').val();


            axios.post('/admin/ActionServer', {
                action: 'AddTransaction',
                TypeApplicant: $("#TypeApplicant").val(),
                numbertran: this.numbertran,
                regionselecttra: region,
                estatetypetra: estatetype,
                sellername: this.sellername,
                buierName: this.buierName,
                price_trans: this.price_trans,
                pricerent: this.pricerent,
                Deposit: this.Deposit,
                commission: this.commission,
                datetransaction: $("#datetransaction").val(),
                descTrans: this.descTrans,
            }).then(response => {
                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ثبت موفق ", " معامله   جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Tranasction/' + response.data.link);
                    }, 2000);
                } else {

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        AddTransactionUser: function () {


            //  var regionselecttra= $("#regionselecttra option:selected").val();


            //var regionselecttra= $('#regionselecttra').find(":selected").val();
            //  var regionselecttra= $("#regionselecttra").prop('selectedIndex');
            //  var estatetypetra= $("#estatetypetra").prop('selectedIndex');
            // var estatetypetra= $('#estatetypetra').find(":selected").val();

            if ($("#datetransaction").val() == '') {
                swal("توضیحات   ", " توضیحات الزامسیت", "info", {
                    button: "باشه"
                });
                return false;
            }

            var region = $('#region').find(':selected').val();
            var estatetype = $('#estatetypetra').find(':selected').val();


            axios.post('/User/ActionServer', {
                action: 'AddTransaction',
                TypeApplicant: $("#TypeApplicant").val(),
                numbertran: this.numbertran,
                regionselecttra: region,
                estatetypetra: estatetype,
                sellername: this.sellername,
                buierName: this.buierName,
                price_trans: this.price_trans,
                pricerent: this.pricerent,
                Deposit: this.Deposit,
                commission: this.commission,
                datetransaction: $("#datetransaction").val(),
                descTrans: this.descTrans,
            }).then(response => {
                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ثبت موفق ", " معامله   جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Tranasction/' + response.data.link);
                    }, 2000);
                } else {

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        RequestOffer: function () {


            //var estatetype= $("#estatetype option:selected").val();
            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();

            var region = $('#region').find(':selected').val();
            var estatetype = $('#estatetypetra').find(':selected').val();


            var positionArea = $("#positionArea").text();


            if (this.nameOffer == "") {

                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if ($('#mdb-select').has('option').length = 0) {
                toastr.info('لطفا  منطقه درخواستی را وارد کنید');

            } else if ($("#mdb-select").val() != "") {

                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if ($("#mdb-selecttwo").val() == "") {
                toastr.info('لطفا  نوع ملک درخواستی را وارد کنید');
                $("#mdb-selecttwo").addClass('input_alert');

            } else if ($("#mdb-selecttwo").val() != "") {

                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (this.textOffer == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#textOffer").addClass('input_alert');
                $('#textOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.textOffer != "") {
                $("#textOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.minprice == "") {
                toastr.info('لطفا حداقل قیمت ملک خود را وارد کنید');
                $("#minprice").addClass('input_alert');
                $('#minprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.minprice != "") {
                $("#minprice").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (this.maxprice == "") {
                toastr.info('لطفا حداکثر قیمت ملک خود را وارد کنید');
                $("#maxprice").addClass('input_alert');
                $('#maxprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.maxprice != "") {
                $("#maxprice").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.position_type_user == "") {
                toastr.info('لطفا موقعیت ملک خود را وارد کنید');
                $("#positionArea").addClass('input_alert');
                $('#positionArea').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.position_type_user != "") {
                $("#positionArea").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '' && this.maxprice != ''
                && this.minprice != '' && this.textOffer != '') {
                axios.post('/RequestOffer', {


                    name: this.nameOffer,
                    mobile: this.mobileOffer,
                    message: this.textOffer,
                    minprice: this.minprice,
                    maxprice: this.maxprice,

                    regionrequestOffer: Posselected,
                    estatetype_userOffer: Eseateselected,
                    positionArea: positionArea,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('با موفقیت درخواست شما ثبت شد');

                        setTimeout(function () {
                            //   window.location.assign('/');
                        }, 2000);

                    } else {

                        toastr.info('مشتری گرامی قبلا درخواست شما ثبت شده در حال بررسی هستیم');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        NewApplicant: function () {


            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();

            var TypeApplicant = $('#TypeApplicant').val();

            // var TypeApplicant=$('#TypeApplicant').find(':selected').val();


            var region = $('#region').find(':selected').val();
            var estatetypetra = $('#estatetypetra').find(':selected').val();


            // var positionArea= $("#postiontype").text();
            var postiontype = $('#postiontype').find(':selected').val();

            if (this.nameOffer == "") {

                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.descTrans == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#descTrans").addClass('input_alert');
                $('#descTrans').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.descTrans != "") {
                $("#descTrans").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (TypeApplicant === 'buy') {
                if (this.minprice == "") {
                    toastr.info('لطفا حداقل قیمت ملک خود را وارد کنید');
                    $("#minprice").addClass('input_alert');
                    $('#minprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
                } else if (this.minprice != "") {
                    $("#minprice").removeClass('input_alert');
                    $(".invalid-feedback3").hide('invalid-feedback');
                }
                if (this.maxprice == "") {
                    toastr.info('لطفا حداکثر قیمت ملک خود را وارد کنید');
                    $("#maxprice").addClass('input_alert');
                    $('#maxprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
                } else if (this.maxprice != "") {
                    $("#maxprice").removeClass('input_alert');
                    $(".invalid-feedback3").hide('invalid-feedback');
                }
            }


            if (this.nameOffer != '' && this.mobileOffer != '') {

                axios.post('/admin/ActionServer', {
                    action: 'NewApplicant',
                    TypeApplicant: TypeApplicant,
                    nameOffer: this.nameOffer,
                    mobile: this.mobileOffer,
                    region: $("#RegionSelected").val(),
                    estatetypetra: $("#EstateSelected").val(),
                    message: this.descTrans,
                    minprice: this.minprice,
                    maxprice: this.maxprice,
                    pricerent: this.pricerent,
                    Deposit: this.Deposit,
                    /* datestart:$("#datestart").val(),
                     dateEnd:$("#dateEnd").val(),
                     lordEstate:this.lordEstate,*/
                    postiontype: postiontype,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 200) {

                        toastr.success('با موفقیت درخواست شما ثبت شد');

                        setTimeout(function () {
                            window.location.assign('/admin/Applicant/' + response.data.link);
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        NewApplicantUser: function () {


            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();

            var TypeApplicant = $('#TypeApplicant').val();

            // var TypeApplicant=$('#TypeApplicant').find(':selected').val();


            var region = $('#region').find(':selected').val();
            var estatetypetra = $('#estatetypetra').find(':selected').val();


            // var positionArea= $("#postiontype").text();
            var postiontype = $('#postiontype').find(':selected').val();

            if (this.nameOffer == "") {

                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.descTrans == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#descTrans").addClass('input_alert');
                $('#descTrans').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.descTrans != "") {
                $("#descTrans").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (TypeApplicant === 'buy') {
                if (this.minprice == "") {
                    toastr.info('لطفا حداقل قیمت ملک خود را وارد کنید');
                    $("#minprice").addClass('input_alert');
                    $('#minprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
                } else if (this.minprice != "") {
                    $("#minprice").removeClass('input_alert');
                    $(".invalid-feedback3").hide('invalid-feedback');
                }
                if (this.maxprice == "") {
                    toastr.info('لطفا حداکثر قیمت ملک خود را وارد کنید');
                    $("#maxprice").addClass('input_alert');
                    $('#maxprice').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
                } else if (this.maxprice != "") {
                    $("#maxprice").removeClass('input_alert');
                    $(".invalid-feedback3").hide('invalid-feedback');
                }
            }


            if (this.nameOffer != '' && this.mobileOffer != '') {

                axios.post('/User/ActionServer', {
                    action: 'NewApplicant',
                    TypeApplicant: TypeApplicant,
                    nameOffer: this.nameOffer,
                    mobile: this.mobileOffer,
                    region: $("#RegionSelected").val(),
                    estatetypetra: $("#EstateSelected").val(),
                    message: this.descTrans,
                    minprice: this.minprice,
                    maxprice: this.maxprice,
                    pricerent: this.pricerent,
                    Deposit: this.Deposit,
                    /* datestart:$("#datestart").val(),
                     dateEnd:$("#dateEnd").val(),
                     lordEstate:this.lordEstate,*/
                    postiontype: postiontype,

                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 200) {

                        toastr.success('با موفقیت درخواست شما ثبت شد');

                        setTimeout(function () {
                            window.location.assign('/User/Applicant/' + response.data.link);
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        NewTenant: function () {


            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();


            var region = $('#region').find(':selected').val();
            var estatetypetra = $('#estatetypetra').find(':selected').val();


            if (this.nameOffer == "") {

                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.tenantEstate == "") {

                toastr.info('لطفا نام مستاجر را وارد کنید');
                $("#tenantEstate").addClass('input_alert');
                $('#tenantEstate').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.tenantEstate != "") {
                $("#tenantEstate").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileTenant == "") {
                toastr.info('لطفا  شماره موبایل مستاجر وارد کنید');
                $("#mobileTenant").addClass('input_alert');
                $('#mobileTenant').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileTenant != "") {
                $("#mobileTenant").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.descTrans == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#descTrans").addClass('input_alert');
                $('#descTrans').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.descTrans != "") {
                $("#descTrans").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.pricerent == "") {
                toastr.info('لطفا مبغ اجاره ماهانه ملک را وارد کنید');
                $("#pricerent").addClass('input_alert');
                $('#pricerent').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.pricerent != "") {
                $("#pricerent").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.Deposit == "") {
                toastr.info('لطفا مبغ ودیعه ماهانه ملک را وارد کنید');
                $("#Deposit").addClass('input_alert');
                $('#Deposit').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.Deposit != "") {
                $("#Deposit").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '') {

                axios.post('/admin/ActionServer', {
                    action: 'NewTenant',

                    nameOffer: this.nameOffer,
                    mobile: this.mobileOffer,
                    tenantEstate: this.tenantEstate,
                    mobileTenant: this.mobileTenant,
                    region: region,
                    estatetypetra: estatetypetra,
                    message: this.descTrans,
                    pricerent: this.pricerent,
                    Deposit: this.Deposit,
                    dateDelivery: $("#dateDelivery").val(),
                    datestart: $("#datestart").val(),
                    dateEnd: $("#dateEnd").val(),


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 200) {

                        toastr.success('با موفقیت قرارداد شما ثبت شد');

                        setTimeout(function () {
                            window.location.assign('/admin/contract');
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        NewTenantUser: function () {


            var Posselected = $("#Posselected").val();
            var Eseateselected = $("#Eseateselected").val();


            var region = $('#region').find(':selected').val();
            var estatetypetra = $('#estatetypetra').find(':selected').val();


            if (this.nameOffer == "") {

                toastr.info('لطفا نام خود را وارد کنید');
                $("#nameOffer").addClass('input_alert');
                $('#nameOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.nameOffer != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileOffer == "") {
                toastr.info('لطفا  شماره موبایل را وارد کنید');
                $("#mobileOffer").addClass('input_alert');
                $('#mobileOffer').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileOffer != "") {
                $("#mobileOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.tenantEstate == "") {

                toastr.info('لطفا نام مستاجر را وارد کنید');
                $("#tenantEstate").addClass('input_alert');
                $('#tenantEstate').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.tenantEstate != "") {
                $("#tenantEstate").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.mobileTenant == "") {
                toastr.info('لطفا  شماره موبایل مستاجر وارد کنید');
                $("#mobileTenant").addClass('input_alert');
                $('#mobileTenant').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.mobileTenant != "") {
                $("#mobileTenant").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.descTrans == "") {
                toastr.info('لطفا   پیغام خود را وارد کنید');
                $("#descTrans").addClass('input_alert');
                $('#descTrans').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.descTrans != "") {
                $("#descTrans").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.pricerent == "") {
                toastr.info('لطفا مبغ اجاره ماهانه ملک را وارد کنید');
                $("#pricerent").addClass('input_alert');
                $('#pricerent').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.pricerent != "") {
                $("#pricerent").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (this.Deposit == "") {
                toastr.info('لطفا مبغ ودیعه ماهانه ملک را وارد کنید');
                $("#Deposit").addClass('input_alert');
                $('#Deposit').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (this.Deposit != "") {
                $("#Deposit").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (this.nameOffer != '' && this.mobileOffer != '') {

                axios.post('/User/ActionServer', {
                    action: 'NewTenant',

                    nameOffer: this.nameOffer,
                    mobile: this.mobileOffer,
                    tenantEstate: this.tenantEstate,
                    mobileTenant: this.mobileTenant,
                    region: region,
                    estatetypetra: estatetypetra,
                    message: this.descTrans,
                    pricerent: this.pricerent,
                    Deposit: this.Deposit,
                    dateDelivery: $("#dateDelivery").val(),
                    datestart: $("#datestart").val(),
                    dateEnd: $("#dateEnd").val(),


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 200) {

                        toastr.success('با موفقیت قرارداد شما ثبت شد');

                        setTimeout(function () {
                            window.location.assign('/admin/contract');
                        }, 2000);

                    } else {

                        toastr.info('مجددا تلاش کنید');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },
        EditTransaction: function (type, Id) {

            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();

            var fullnameTran = $("#fullname").val();
            var Sellername = $("#Sellername").val();
            var priceTran = $("#price_traanc").val();
            var typeTra = $("#typeTra").val();
            var pricerent = $("#pricerent").val();
            var commission = $("#commission").val();
            var Deposit = $("#Deposit").val();
            var codetrans = $("#codetrans").val();

            var link = '';
            if (type == 'User') {
                link = '/User/ActionServer';

            } else if (type == 'admin') {

                link = '/admin/ActionServer';
            }

            axios.post(link, {
                action: 'EditTransaction',
                Id: Id,
                fullnameTran: fullnameTran,
                regionselect: regionselect,
                estatetype: estatetype,
                Sellername: Sellername,
                priceTran: priceTran,
                typeTra: typeTra,
                pricerent: pricerent,
                commission: commission,
                Deposit: Deposit,
                codetrans: codetrans,
            }).then(response => {
                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ویرایش موفق ", " معامله    با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data.status == 100) {
                    swal("ویرایش ناموفق ", " خطا مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        UpdatetApplicant: function (type, Id) {

            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();

            var nameApplicant = $("#nameApplicant").val();
            var typeTra = $("#typeTra").val();
            var mobileApplcaint = $("#mobileApplcaint").val();
            var pricefrom = $("#pricefrom").val();
            var priceto = $("#priceto").val();
            var pricerent = $("#pricerent").val();
            var Deposit = $("#Deposit").val();


            var link = '';
            if (type == 'User') {
                link = '/User/ActionServer';

            } else if (type == 'admin') {

                link = '/admin/ActionServer';
            }

            axios.post(link, {
                action: 'UpdatetApplicant',
                Id: Id,
                nameApplicant: nameApplicant,
                regionselect: regionselect,
                estatetype: estatetype,
                typeTra: typeTra,
                mobileApplcaint: mobileApplcaint,
                pricefrom: pricefrom,
                priceto: priceto,
                pricerent: pricerent,
                Deposit: Deposit,
            }).then(response => {
                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ویرایش موفق ", " متقاضی    با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data.status == 100) {
                    swal("ویرایش ناموفق ", " خطا مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        UpdatetContract: function (type, Id) {

            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();

            var lordname = $("#lordname").val();
            var lordmobile = $("#lordmobile").val();
            var tenant = $("#tenant").val();
            var tenantmobile = $("#tenantmobile").val();
            var dateDelivery = $("#dateDelivery").val();
            var datestart = $("#datestart").val();
            var dateEnd = $("#dateEnd").val();
            var pricerent = $("#pricerent").val();
            var Deposit = $("#Deposit").val();


            var link = '';
            if (type == 'User') {
                link = '/User/ActionServer';

            } else if (type == 'admin') {

                link = '/admin/ActionServer';
            }

            axios.post(link, {
                action: 'UpdatetContract',
                Id: Id,

                regionselect: regionselect,
                estatetype: estatetype,
                lordname: lordname,
                lordmobile: lordmobile,
                tenant: tenant,
                tenantmobile: tenantmobile,
                dateDelivery: dateDelivery,
                datestart: datestart,
                dateEnd: dateEnd,
                pricerent: pricerent,
                Deposit: Deposit,


            }).then(response => {
                console.log(response.data);

                if (response.data.status == 200) {
                    swal("ویرایش موفق ", " متقاضی    با موفقیت ویرایش شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data.status == 100) {
                    swal("ویرایش ناموفق ", " خطا مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditUser: function (Id) {

            axios.post('/admin/ActionServer', {
                action: 'EditPossibilities',
                Id: Id,
                EditNamePossibity: this.EditNamePossibity

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/EstateOwnerShip');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        ChangePassword: function (Id) {

            axios.post('/admin/ActionServer', {
                action: 'ChangePassword',
                Id: Id,
                passworduser: this.passworduser

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("رمز عبور ", "عملیات تغییر رمز با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },

        ChangePasswordUser: function (Id) {


            axios.post('/User/ActionServer', {
                action: 'ChangePasswordUser',
                Id: Id,
                newpassowrd: this.ChangeUserPassword

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("رمز عبور ", "عملیات تغییر رمز با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },

        ChangeStatuUser: function (Id, type) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeStatuUser',
                Id: Id,
                type: type

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("وضعیت حساب ", "وضعیت حساب با موفقیت تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('User');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        ChangeRoleUser: function (Id, role) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeRoleUser',
                Id: Id,
                role: role

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("تغییر مجوز ", "عملیات تغییر نقش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('User');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        ChangeStatusEstate: function (Id, role) {


            axios.post('/admin/ActionServer', {
                action: 'ChangeStatusEstate',
                Id: Id,
                role: role

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("وضعیت ملک ", "وضعیت ملک با موفقیت تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('Estate');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        ChangeStatusEstateUser: function (Id, role) {


            axios.post('/User/ActionServer', {
                action: 'ChangeStatusEstateUser',
                Id: Id,
                role: role

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("وضعیت ملک ", "وضعیت ملک با موفقیت تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('Estate');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        EditProfile: function (Id) {


            /*  if(this.usernameEdit ===  '')
              {
                  toastr.error('لطفا نام و نام خانوادگی را وارد کنید');
                  return false;
              }*/
            if (this.mobileEdit == '') {
                toastr.error('لطفا شماره موبایل را وارد کنید');
                return false;
            }

            axios.post('/admin/ActionServer', {
                action: 'EditProfile',
                usernameEdit: this.usernameEdit,
                mobileEdit: this.mobileEdit,
                Id: Id

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش پروفایل ", "عملیات با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('User');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteUser: function (Id) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post('/portal/UserActionServer', {
                        action: 'DeleteUser',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {
                            /*  swalWithBootstrapButtons.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'کاربر مورد نظر با موفقیت حذف شد',
                                showConfirmButton: true,
                            })
                            /* Swal.fire({
                                 type: "success",
                                 title: 'حذف',
                                 text: 'کاربر   مورد نظر با موفقیت حذف شد.',
                                 confirmButtonClass: 'btn btn-success',
                                 confirmButtonText: 'باشه',
                             });*/

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {


                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }


            });


        },
        DeleteEmployee: function (Id) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post('/portal/EmployeeActionServer', {
                        action: 'DeleteEmployee',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {
                            /*  swalWithBootstrapButtons.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'پرسنل مورد نظر با موفقیت حذف شد',
                                showConfirmButton: true,
                            })

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {


                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }


            });


        },
        DeleteGroupProduct: function (Id) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post('/portal/DeleteGroupProduct', {
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {
                            /*  swalWithBootstrapButtons.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'کاربر مورد نظر با موفقیت حذف شد',
                                showConfirmButton: true,
                            })
                            /* Swal.fire({
                                 type: "success",
                                 title: 'حذف',
                                 text: 'کاربر   مورد نظر با موفقیت حذف شد.',
                                 confirmButtonClass: 'btn btn-success',
                                 confirmButtonText: 'باشه',
                             });*/

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else if (response.data.status == 401) {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'info',
                                title: 'قادر به حذف گروه کالای نیستید دارای کالا هست این گروه بندی',
                                showConfirmButton: true,
                            })

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {


                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }


            });


        },
        DeletePercentProduct: function (Id) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post('/portal/DeletePercentProduct', {
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {
                            /*  swalWithBootstrapButtons.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'درصد کالای مورد نظر با موفقیت حذف شد',
                                showConfirmButton: true,
                            })
                            /* Swal.fire({
                                 type: "success",
                                 title: 'حذف',
                                 text: 'کاربر   مورد نظر با موفقیت حذف شد.',
                                 confirmButtonClass: 'btn btn-success',
                                 confirmButtonText: 'باشه',
                             });*/

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else if (response.data.status == 401) {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'info',
                                title: 'قادر به حذف درصد کالای نیستید دارای کالا هست این  درصد کالایی',
                                showConfirmButton: true,
                            })

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {


                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'لغو',
                        'عملیات لغو شد :)',
                        'لغو'
                    )
                }


            });


        },
        DeleteProduct: function (Id) {


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'آیا مطمئنید؟',
                text: "این عمل قابل بازگشت نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله ، حذف  کن!',
                cancelButtonText: 'انصراف',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post('/portal/DeleteProduct', {
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {
                            /*  swalWithBootstrapButtons.fire(
                                  'Deleted!',
                                  'Your file has been deleted.',
                                  'success'
                              )*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'کالا مورد نظر با موفقیت حذف شد',
                                showConfirmButton: true,
                            })


                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else if (response.data.status == 401) {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'info',
                                title: 'قادر به حذف گروه کالای نیستید دارای کالا هست این گروه بندی',
                                showConfirmButton: true,
                            })

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {


                            Swal.fire({
                                type: "error",
                                title: 'مجددا تلاش کنید',
                                showConfirmButton: false,
                                timer: 2500,
                                confirmButtonClass: 'btn btn-primary',
                                buttonsStyling: false,
                            });
                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }


            });


        },


        AddUsageType: function () {

            axios.post('/admin/ActionServer', {

                action: 'AddUsageType',
                NameUsage: this.NameUsage

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ثبت موفق ", "نوع کاربر جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/UsageType');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        EditUsageType: function (Id) {

            axios.post('/admin/ActionServer', {
                action: 'EditUsageType',
                Id: Id,
                EditNameUsage: this.EditNameUsage

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 200) {
                    swal("ویرایش ", "عملیات ویرایش با موفقیت انجام شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/UsageType');
                    }, 2000);

                }


            }, response => {
                this.error = 1;
                console.log("error");
            });


        },
        DeleteUsageType: function (Id) {

            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی نوع امکانات نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {


                    axios.post('/admin/ActionServer', {
                        action: 'DeleteUsageType',
                        Id: Id,

                    }).then(response => {


                        if (response.data.status == 200) {


                            swal("نوع کاربری مورد نظر با موفقیت حذف شد.", {
                                icon: "success",
                                button: "باشه"
                            });
                            window.location.assign('/admin/UsageType');
                        } else {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });

                        }


                    }, response => {
                        console.log("error");
                    });


                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });


                }
            });


        },


        DeleteImageEstate: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی تصویر  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteImageEstate', {

                        Id: Id

                    }).then(response => {


                        swal("تصویر ملک مورد نظر    شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },


        /***************RegionType*********************/
        AddEstate: function () {


            var provincelist = $("#state option:selected").text();
            var citylist = $("#city option:selected").text();
            var regionselect = $("#regionselect option:selected").val();
            var estatetype = $("#estatetype option:selected").val();
            var typeAdv = $("#typeAdv option:selected").val();
            var usagetype = $("#usagetype option:selected").val();
            var ownership = $("#ownership option:selected").val();
            var requestTour = $("#requestTour option:selected").val();
            var LandTotalSquare = $("#LandTotalSquare").text();


            axios.post('/admin/AddEstate', {

                city: this.city,
                province: this.province,
                region: this.regionselect,
                estatetype: this.estatetype,
                typeAdv: this.typeAdv,
                position_type: this.position_type,
                usagetype: this.usagetype,
                ownership: this.ownership,
                requestTour: this.requestTour,
                ComplimentalDescription: this.ComplimentalDescription,
                LandTotalSquare: this.LandTotalSquare,
                SquareFootage: this.SquareFootage,
                RoomNumber: this.RoomNumber,
                floor: this.floor,
                yearmade: this.yearmade,
                MobileNumber: this.MobileNumber,
                fullname: this.fullname,
                Email: this.Email,
                Address: this.Address,
                loanAmount: this.loanAmount,
                price: this.price,
                loan: this.loan,
                price_rahan: this.price_rahan,
                RentAmount: this.RentAmount,
                textNote: this.textNote,
                VirtualTourCode: this.VirtualTourCode,

                /* province:provincelist,
                 region:regionselect,
                 requestTour:requestTour,
                 estatetype:$("#estatetype option:selected").text(),

                 ownership:ownership,
                 typeAdv:typeAdv,

                 ComplimentalDescription:this.ComplimentalDescription,
                 LandTotalSquare:this.LandTotalSquare,
                 SquareFootage:this.SquareFootage,
                 RoomNumber:this.RoomNumber,
                 floor:this.floor,
                 yearmade:this.yearmade,
                 MobileNumber:this.MobileNumber,
                 fullname:this.fullname,
                 Email:this.Email,
                 Address:this.Address,
                 loanAmount:this.loanAmount,
                 price:this.price,
                 loan:this.loan,
                 price_rahan:this.price_rahan,
                 RentAmount:this.RentAmount,
                 textNote:this.textNote,

                 VirtualTourCode:this.VirtualTourCode,
 */

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "ملک جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        ChangeVlaueAdvType: function (event) {

            var typeAdv = $("#typeAdv option:selected").val();
            var price = $("input[data-value='price']").val();


            var loan = $("#loan option:selected").val();
            var loanAmount = $("input[data-value='loanAmount']").val();
            var price_rahan = $("input[data-value='price_rahan']").val();
            var RentAmount = $("input[data-value='RentAmount']").val();
            if (typeAdv == 'sale') {
                price_rahan.text(0);
                RentAmount.text(0);
            } else {
                price.text(0);
            }


        },
        EditEstate: function (EstateId, type) {


            var regionselect = $('#regionselect').find(':selected').val();

            var estatetype = $('#estatetype').find(':selected').val();
            var position_type = $('#position_type').find(':selected').val();
            var usagetype = $('#usagetype').find(':selected').val();
            var ownership = $('#ownership').find(':selected').val();
            var LandTotalSquare = $('#LandTotalSquare').val();
            var SquareFootage = $('#SquareFootage').val();
            var RoomNumber = $('#RoomNumber').val();
            var floor = $('#floor').val();
            var unit = $('#unit').val();
            var unitfloor = $('#unitfloor').val();
            var unitnumber = $('#unitnumber').val();
            var fullname = $('#fullname').val();
            var yearmade = $('#yearmade').val();
            var MobileNumber = $('#MobileNumber').val();
            var typeAdv = $('#typeAdv').find(':selected').val();
            var loan = $('#loan').find(':selected').val();
            var price = $('#price').val();
            var price_rahan = $('#price_rahan').val();
            var RentAmount = $('#RentAmount').val();
            var loanAmount = $('#loanAmount').val();

            var Address = $('#Address').val();
            var textNote = $("textarea[data-value='textNote']").val();

            /*    console.log(regionselect);
                console.log(estatetype);
                console.log(position_type);
                console.log(usagetype);
                console.log(ownership);
                console.log(LandTotalSquare);
                console.log(SquareFootage);
                console.log(RoomNumber);
                console.log(floor);
                console.log(unit);
                console.log(unitnumber);
                console.log(unitfloor);
                console.log(yearmade);
                console.log(fullname);
                console.log(MobileNumber);
                console.log(typeAdv);
                console.log(price);
                console.log(price_rahan);
                console.log(RentAmount);
                console.log(loan);
                console.log(loanAmount);
                console.log(ComplimentalDescription);
                console.log(Address);*/

            if (regionselect == '') {
                toastr.error('لطفا منطقه ملک را مشخص کنید');
            }

            /* var estatetype = $("#estatetype option:selected").val();
             var position_type = $("#position_type option:selected").val();
             var typeAdv = $("#typeAdv option:selected").val();


             var usagetype = $("#usagetype option:selected").val();
             var ownership = $("#ownership option:selected").val();
             var requestTour = $("#requestTour option:selected").val();

             var LandTotalSquare = $("input[data-value='LandTotalSquare']").val();
             var SquareFootage = $("input[data-value='SquareFootage']").val();

             var RoomNumber = $("input[data-value='RoomNumber']").val();

             var unit = $("input[data-value='unit']").val();
             var floor = $("input[data-value='floor']").val();
             var unitfloor = $("input[data-value='unitfloor']").val();


             var yearmade = $("input[data-value='yearmade']").val();
             var fullname = $("input[data-value='fullname']").val();
             var MobileNumber = $("input[data-value='MobileNumber']").val();
             var Email = $("input[data-value='Email']").val();
             var Address = $("input[data-value='Address']").val();
             var price = $("input[data-value='price']").val();

             var loan = $("#loan option:selected").val();
             var loanAmount = $("input[data-value='loanAmount']").val();
             var price_rahan = $("input[data-value='price_rahan']").val();
             var RentAmount = $("input[data-value='RentAmount']").val();
             var VirtualTourCode = $("input[data-value='VirtualTourCode']").val();
             var ComplimentalDescription = $("textarea[data-value='ComplimentalDescription']").val();*/

            var loan = $("#loan option:selected").val();

            if (loan == 1) {
                if (RentAmount == '') {
                    toastr.error('لطفا مبلغ وام را وارد کنید ');
                    return false;
                }

                if (Number(RentAmount) === 0) {


                    toastr.error('فیلد وام باید وارد کنید چون ملک مورد نظر وام دارد');
                    return false;
                }

            }


            if (typeAdv == 'rent') {

                if (price_rahan == '') {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت رهن را وارد کنید');
                    return false;
                }
                if (RentAmount == '') {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت اجاره را وارد کنید');
                    return false;
                }
                if (Number(RentAmount) === 0) {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت اجاره را وارد کنید');
                    return false;
                }
                if (Number(price_rahan) === 0) {
                    toastr.error('ملک جاری از نوع اجاره هست لطفا قیمت رهن را وارد کنید');
                    return false;
                }


            } else if (typeAdv == 'sale') {


                if (price == '') {
                    toastr.error('قیمت فروش ملک را وارد کنید نباید خالی باشد');
                    return false;

                } else if (Number(price) === 0) {
                    toastr.error('قیمت فروش ملک را وارد کنید نباید خالی باشد');
                    return false;
                }
            }


            this.allerros = [];


            var typelink = '';

            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }

            axios.post(typelink, {

                action: 'UpdateEstate',
                EstateId: EstateId,
                region: regionselect,
                estatetype: estatetype,
                typeAdv: typeAdv,
                position_type: position_type,
                usagetype: usagetype,
                ownership: ownership,


                LandTotalSquare: LandTotalSquare,
                SquareFootage: SquareFootage,
                RoomNumber: RoomNumber,
                floor: floor,
                unit: unit,
                unitfloor: unitfloor,
                unitnumber: unitnumber,
                yearmade: yearmade,
                MobileNumber: MobileNumber,
                fullname: fullname,
                Address: Address,
                loanAmount: loanAmount,
                price: price,
                loan: loan,
                price_rahan: price_rahan,
                RentAmount: RentAmount,
                textNote: textNote,


            }).then(response => {
                console.log(response.data);

                if (response.data.status == 100) {
                    swal("ویرایش موفق ", "ملک مورد نظر با موفقیت ویرایش شد", "info", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        // window.location.assign('/admin/Estatelist');
                        location.reload();
                    }, 2000);
                } else if (response.data['success'] == false) {
                    toastr.error('لطفا فیلد ها را با دقت پر کنید');
                    this.allerros = response.data.errors;


                }


            })


            /* ,response=>{
                     alert(response.data.errors);
                     this.errors=response.data.errors;

                     /!* if(error.response.status == 422)
                      {

                          this.errors=error.response.data.errors;
                      }*!/
                     swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                         button: "باشه"
                     });
                     this.errors=error.response.data.errors;
                     console.log("error");
                 }*/


        },

        GetShowImageEsate: function (EstateId) {


            var RoomNumber = $("input[data-value='RoomNumber']").val();


            this.allerros = [];

            axios.get('/admin/EditEstate', {

                EstateId: EstateId,


            }).then(response => {
                console.log(response.data);


            })


        },

        ImageAvatar(e) {

            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.avatar = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        uploadImage() {
            axios.post('/admin/AddTeam', {avatar: this.avatar}).then(response => {
                console.log(response);
            });
        },


        AddTeam: function () {


            var name = $("#name").val();
            var job = $("#job").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var linkedin = $("#linkedin").val();
            var facebook = $("#facebook").val();
            var instagram = $("#instagram").val();
            var telegram = $("#telegram").val();
            var whatsup = $("#whatsup").val();
            // var whatsup=$("#file").val();


            const formData = new FormData();


            this.allerros = [];


            axios.post('/admin/AddTeam', {

                name: name,
                job: job,
                email: email,
                mobile: mobile,
                linkedin: linkedin,
                facebook: facebook,
                instagram: instagram,
                telegram: telegram,
                whatsup: whatsup,
                image: this.avatar


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 'success') {
                    swal("ثبت موفق ", "عضو جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        // window.location.assign('/admin/Estatelist');
                        location.reload();
                    }, 2000);
                } else if (response.data['success'] == false) {
                    toastr.error('لطفا فیلد ها را با دقت پر کنید');
                    this.allerros = response.data.errors;


                }


            })


            /* ,response=>{
                     alert(response.data.errors);
                     this.errors=response.data.errors;

                     /!* if(error.response.status == 422)
                      {

                          this.errors=error.response.data.errors;
                      }*!/
                     swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                         button: "باشه"
                     });
                     this.errors=error.response.data.errors;
                     console.log("error");
                 }*/


        },

        AddNote: function (Id) {


            var imageSilder = $("#imageSilder").val();

            var noterequest = $('textarea[name="noterequest"]').val();


            axios.post('/admin/AddNote', {
                Id: Id,
                text: noterequest,


            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 'success') {
                    swal("یادادشت", "یادادشت با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        AddSilder: function () {


            var imageSilder = $("#imageSilder").val();

            axios.post('/admin/AddSilder', {
                titleSilder: this.titleSilder,
                DescSilder: this.DescSilder,
                imageSilder: imageSilder

            }).then(response => {
                console.log(response.data);

                if (response.data['status'] == 100) {
                    swal("اسلایدر", "اسلایدر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/listSlider');
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        EditSliderImage: function (Id) {


            var TopicSlider = $('input[name="TopicSlider"]').val();
            var TextSlider = $('input[name="TextSlider"]').val();
            var imageSilder = $("#imageSilder").val();


            axios.post('/admin/EditSlider', {
                Id: Id,
                TopicSlider: this.TopicSlider,
                TextSlider: this.TextSlider,
                imageSilder: this.avatar
            }).then(response => {


                if (response.data['status'] == 'success') {
                    swal("اسلایدر", "اسلایدر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        DeleteEstateAdmin: function (Id) {


            swal({
                title: "آیا قصد درخواست حذف  ملک جاری دارید ؟",
                text: "درخواست شما برای مدیر ارسال شود",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('/admin/DeleteEstateOffer', {

                        Id: Id

                    }).then(response => {

                        swal("درخواست شما با موفقیت ثبت شد ", {
                            icon: "success",
                            button: "تشکر از شما"
                        });

                        setTimeout(function () {
                            window.location.assign('/admin/Estatelist');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        DeleteRequest: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی درخواست  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {

                    axios.post('/admin/DeleteRequest', {

                        Id: Id

                    }).then(response => {

                        swal("درخواست   شما با موفقیت حذف شد", {
                            icon: "success",
                            button: "باشه"
                        });

                        setTimeout(function () {
                            window.location.assign('/admin/listRequest');
                        }, 2000);


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        /***************Possibilies Estate*********************/
        AddPossibilitiesEstate: function (id) {


            var val = [];
            var arr = [];
            var i = 0;
            $('.form-check-input:checked').each(function () {
                arr[i++] = $(this).val();
            });

            /*  $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                  alert(val);
              });*/

            axios.post('/admin/AddPossibilitiesEstate', {

                id: id,
                possibilies: $("#Posselected").val()

            }).then(response => {
                swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                    button: "باشه"
                });
                console.log(response.data);

                setTimeout(function () {
                    location.reload();
                }, 2000);

                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        AddPossibilitiesToEstate: function (id, type) {


            var val = [];
            var arr = [];
            var i = 0;
            $('.form-check-input:checked').each(function () {
                arr[i++] = $(this).val();
            });

            /*  $(':checkbox:checked').each(function(i){
                  val[i] = $(this).val();
                  alert(val);
              });*/


            var typelink = '';
            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'Admin') {
                typelink = '/admin/ActionServer';
            }

            axios.post(typelink, {
                action: 'AddPossibilitiesToEstate',
                id: id,
                possibilies: $("#Posselected").val(),

            }).then(response => {
                /* swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                     button: "باشه"
                 });*/
                console.log(response.data['status']);

                if (response.data.status == 500) {
                    swal("تکراری", "نوع امکانات انتخاب شده تکراری هست دقت کنید ", "warning", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data.status == 200) {
                    swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }

                /*  setTimeout(function () {
                      location.reload();
                  },2000);*/

                /*   if (response.data['status'] == 100) {
                       swal("ثبت موفق ", "نوع امکانات جدید برای ملک مورد نظر با موفقیت ثبت شد", "success", {
                           button: "باشه"
                       });

                   }*/


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },

        ChangeStatusRequest: function (Id, type) {


            axios.post('/admin/ChangeStatusRequest', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == "success") {

                    swal(" تغییر سطح ", "سطح درخواست با موفقیت تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                } else if (response.data['status'] == "Faild") {


                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeStatus: function (Id, type) {


            axios.post('/admin/ChangeEstateStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {

                    $(".modal-body").html(response.data['html']);
                    $("#exampleModalEdit").modal("show");

                    /*  swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                          button: "باشه"
                      });*/
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                } else if (response.data['status'] == 101) {


                    swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeEstateVIP: function (Id, type) {


            axios.post('/admin/ChangeEstateVIP', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضعیت نوع ملک ", "ملک مورد نظر شما با موفقیت تغییر وضعیت داده شده", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                } else if (response.data['status'] == 400) {


                    swal("وضیعت ملک", "ملک مورد نظر به حالت انتشار تغییر یافت", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeElevator: function (type, Id, valueadta) {

            var typelink = '';
            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }

            axios.post(typelink, {
                action: 'ChangeElevatoEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("تغییر وضعیت ", "امکانات ویژه ملک مورد نظر تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    swal(" خطا", "مجددا تلاش کنید", "warning", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeParking: function (type, Id, valueadta) {

            var typelink = '';

            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }


            axios.post(typelink, {
                action: 'ChangeParkingEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("تغییر وضعیت ", "امکانات ویژه ملک مورد نظر تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    swal(" خطا", "مجددا تلاش کنید", "warning", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeWarehouse: function (type, Id, valueadta) {

            var typelink = '';
            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }


            axios.post(typelink, {
                action: 'ChangewarehouseEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("تغییر وضعیت ", "امکانات ویژه ملک مورد نظر تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    swal(" خطا", "مجددا تلاش کنید", "warning", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },

        ChangeBalcony: function (type, Id, valueadta) {

            var typelink = '';

            if (type == 'User') {
                typelink = '/User/ActionServer';
            } else if (type == 'admin') {
                typelink = '/admin/ActionServer';
            }

            axios.post(typelink, {

                action: 'ChangeBalconyEstate',
                Id: Id,
                type: valueadta

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("تغییر وضعیت ", "امکانات ویژه ملک مورد نظر تغییر یافت", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 500) {


                    swal(" خطا", "مجددا تلاش کنید", "warning", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/Estatelist');
                    }, 2000);
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeStatusUser: function (Id, type) {


            axios.post('/admin/ChangeUserStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangePermissionUser: function (Id, type) {

            axios.post('/admin/ChangePermissionUser', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        ChangeStateNoty: function () {


            axios.post('/admin/ChangeUserStatus', {

                Id: Id,
                type: type

            }).then(response => {

                if (response.data['status'] == 100) {


                    swal("وضیعت دسترسی", "وضعیت حساب کاربری مورد نظر تغییر  یافت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        window.location.assign('/admin/User');
                    }, 2000);
                } else if (response.data['status'] == 101) {


                    swal("خطا", "مجددا تلاش کنید ", "warning", {
                        button: "باشه"
                    });
                    /* setTimeout(function () {
                         window.location.assign('/admin/Estatelist');
                     },2000);*/
                }


            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        EditStateEstatePending: function () {


            axios.post('/admin/ChangeEstateStatusPending', {

                Id: $("#IdEstate").val(),
                type: $("#typeStatus").val(),
                text: $("#StatusText").val(),

            }).then(response => {

                if (response.data['status'] == 100) {

                    swal("وضیعت ملک", "ملک با موفقیت غیرفعال شد و اطاع رسانی شد", "success", {
                        button: "باشه"
                    });

                    setTimeout(function () {
                        location.reload();
                    }, 2000)
                }

            }, response => {
                this.error = 1;
                console.log("error");
            });

        },


        /* onChangeRegion:function(event) {

            this.regionselecttr=event.target.value;
             console.log(event.target.value);
             alert(event.target.value);
         },*/

        onChangeRegion(event) {

            this.keyregion = event.target.value;
            console.log(event.target.value);
        },


        DeleteSilder: function (Id) {


            swal({
                title: "آیا اطمینان دارید؟",
                text: "پس از حذف قادر به بازیابی ملک  نخواهید بود!",
                icon: "warning",
                buttons: {
                    confirm: 'بله',
                    cancel: 'خیر'
                },
                dangerMode: true

            }).then(function (willDelete) {
                if (willDelete) {
                    axios.post('DeleteSilder', {

                        Id: Id

                    }).then(response => {


                        if (response.data['status'] == 100) {
                            swal("اسلایدر  شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/listSlider');
                            }, 2000);
                        } else if (response.data['status'] == 404) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('/admin/listSlider');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });

                } else {
                    swal("حذف ناموفق بود", {
                        icon: "error",
                        button: "باشه"
                    });
                }
            });


        },

        Wo_ResendCode: function (mobile) {


            axios.post('/ResendSMS', {

                mobile: mobile

            }).then(response => {

                console.log(response.data);

                if (response.data['status'] == 100) {

                    swal("ثبت موفق ", "درخواست ملک  جدید با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    Wo_SetTimer();
                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });
        },
        NewCustomer: function () {


            var firstname = $('#firstname').val();
            var codemeli = $('#codemeli').val();
            var mobile = $('#mobile').val();
            var job = $('#job').val();
            var telephone = $('#telephone').val();
            var datebirth = $('#datebirth').val();
            var email = $('#email').val();
            var accountno = $('#accountno').val();
            var cardno = $('#cardno').val();
            var cardtitle = $('#cardtitle').val();
            var shebacard = $('#shebacard').val();
            var password = $('#password').val();
            var typeuser = $('#typeuser :selected').val();
            var address = $('#address').val();


            /*     var arr = [];
                 $.each($("input[name='leveltype']:checked"), function () {
                     arr.push($(this).val());
                 });*/

            if (firstname == '') {
                Swal.fire({
                    type: "info",
                    title: 'نام و نام خانوادگی الزامیست ',
                    text: 'نام و نام خانوادگی مشتری را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (codemeli == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'کد ملی الزامیست ',
                    text: 'کد ملی مشتری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (mobile == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره موبایل الزامیست ',
                    text: 'شماره موبایل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }
            /* else if (password == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'رمز عبور الزامیست ',
                    text: 'رمز عبور را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (job == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شغل مشتری الزامیست ',
                    text: 'شغل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }
            else if (telephone == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تلفن ثابت الزامیست ',
                    text: 'تلفن ثابت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }
            else if (accountno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره حساب الزامیست ',
                    text: 'شماره حساب را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }*/
            else if (cardno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره کارت الزامیست ',
                    text: 'شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardtitle == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'عنوان شماره کارت الزامیست ',
                    text: 'عنوان شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (shebacard == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره شبا الزامیست ',
                    text: 'شماره شبا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (typeuser == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'نوع حساب کاربری الزامیست ',
                    text: 'نوع حساب کاربری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('action', 'NewCustomer');
            dataform.append('firstname', firstname);
            dataform.append('codemeli', codemeli);
            dataform.append('mobile', mobile);
            dataform.append('password', password);
            dataform.append('job', job);
            dataform.append('telephone', telephone);
            dataform.append('datebirth', datebirth);
            dataform.append('email', email);
            dataform.append('accountno', accountno);
            dataform.append('cardno', cardno);
            dataform.append('cardtitle', cardtitle);
            dataform.append('shebacard', shebacard);
            dataform.append('typeuser', typeuser);
            dataform.append('address', address);


            axios.post('/portal/UserActionServer',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ثبت موفق آمیز ',
                        text: 'مشتری جدید با موفقیت ثبت شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 100) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.textmessage,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 422) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.errors,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        NewEmployee: function () {


            var firstname = $('#firstname').val();
            var codemeli = $('#codemeli').val();
            var mobile = $('#mobile').val();
            var job = $('#job').val();
            var telephone = $('#telephone').val();
            var datebirth = $('#datebirth').val();
            var email = $('#email').val();
            var accountno = $('#accountno').val();
            var cardno = $('#cardno').val();
            var cardtitle = $('#cardtitle').val();
            var shebacard = $('#shebacard').val();
            var password = $('#password').val();
            var typeuser = $('#typeuser :selected').val();
            var address = $('#address').val();


            /*     var arr = [];
                 $.each($("input[name='leveltype']:checked"), function () {
                     arr.push($(this).val());
                 });*/

            if (firstname == '') {
                Swal.fire({
                    type: "info",
                    title: 'نام و نام خانوادگی الزامیست ',
                    text: 'نام و نام خانوادگی مشتری را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (codemeli == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'کد ملی الزامیست ',
                    text: 'کد ملی مشتری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (mobile == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره موبایل الزامیست ',
                    text: 'شماره موبایل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (password == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'رمز عبور الزامیست ',
                    text: 'رمز عبور را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } /*else if (job == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شغل مشتری الزامیست ',
                    text: 'شغل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (telephone == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تلفن ثابت الزامیست ',
                    text: 'تلفن ثابت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (accountno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره حساب الزامیست ',
                    text: 'شماره حساب را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره کارت الزامیست ',
                    text: 'شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardtitle == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'عنوان شماره کارت الزامیست ',
                    text: 'عنوان شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (shebacard == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره شبا الزامیست ',
                    text: 'شماره شبا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (typeuser == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'نوع حساب کاربری الزامیست ',
                    text: 'نوع حساب کاربری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }*/


            let dataform = new FormData();
            dataform.append('action', 'NewEmployee');
            dataform.append('firstname', firstname);
            dataform.append('codemeli', codemeli);
            dataform.append('mobile', mobile);
            dataform.append('password', password);
            dataform.append('job', job);
            dataform.append('telephone', telephone);
            dataform.append('datebirth', datebirth);
            dataform.append('email', email);
            dataform.append('accountno', accountno);
            dataform.append('cardno', cardno);
            dataform.append('cardtitle', cardtitle);
            dataform.append('shebacard', shebacard);
            dataform.append('typeuser', typeuser);
            dataform.append('address', address);


            axios.post('/portal/EmployeeActionServer',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ثبت موفق آمیز ',
                        text: 'مشتری جدید با موفقیت ثبت شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 100) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.textmessage,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 422) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.errors,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditCustomer: function (Id) {


            var firstname = $('#firstname').val();
            var codemeli = $('#codemeli').val();
            var mobile = $('#mobile').val();
            var job = $('#job').val();
            var telephone = $('#telephone').val();
            var datebirth = $('#datebirth').val();
            var email = $('#email').val();
            var accountno = $('#accountno').val();
            var cardno = $('#cardno').val();
            var cardtitle = $('#cardtitle').val();
            var shebacard = $('#shebacard').val();
            var password = $('#password').val();
            var typeuser = $('#typeuser :selected').val();
            var address = $('#address').val();


            /*     var arr = [];
                 $.each($("input[name='leveltype']:checked"), function () {
                     arr.push($(this).val());
                 });*/

            if (firstname == '') {
                Swal.fire({
                    type: "info",
                    title: 'نام و نام خانوادگی الزامیست ',
                    text: 'نام و نام خانوادگی مشتری را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (codemeli == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'کد ملی الزامیست ',
                    text: 'کد ملی مشتری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (mobile == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره موبایل الزامیست ',
                    text: 'شماره موبایل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (job == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شغل مشتری الزامیست ',
                    text: 'شغل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (telephone == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تلفن ثابت الزامیست ',
                    text: 'تلفن ثابت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (accountno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره حساب الزامیست ',
                    text: 'شماره حساب را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره کارت الزامیست ',
                    text: 'شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardtitle == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'عنوان شماره کارت الزامیست ',
                    text: 'عنوان شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (shebacard == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره شبا الزامیست ',
                    text: 'شماره شبا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (typeuser == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'نوع حساب کاربری الزامیست ',
                    text: 'نوع حساب کاربری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('action', 'EditCustomer');
            dataform.append('firstname', firstname);
            dataform.append('codemeli', codemeli);
            dataform.append('mobile', mobile);
            dataform.append('job', job);
            dataform.append('telephone', telephone);
            dataform.append('datebirth', datebirth);
            dataform.append('email', email);
            dataform.append('accountno', accountno);
            dataform.append('cardno', cardno);
            dataform.append('cardtitle', cardtitle);
            dataform.append('shebacard', shebacard);
            dataform.append('typeuser', typeuser);
            dataform.append('address', address);
            dataform.append('Id', Id);


            axios.post('/portal/UserActionServer',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ویرایش موفق آمیز',
                        text: 'اطلاعات مشتری مورد نظر با موفقیت ویرایش شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });

                    setTimeout(function () {
                        window.location.assign('User');
                    }, 3000);
                } else if (response.data.status == 100) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.textmessage,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 422) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.errors,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditEmployee: function (Id) {


            var firstname = $('#firstname').val();
            var codemeli = $('#codemeli').val();
            var mobile = $('#mobile').val();
            var job = $('#job').val();
            var telephone = $('#telephone').val();
            var datebirth = $('#datebirth').val();
            var email = $('#email').val();
            var accountno = $('#accountno').val();
            var cardno = $('#cardno').val();
            var cardtitle = $('#cardtitle').val();
            var shebacard = $('#shebacard').val();
            var password = $('#password').val();
            var typeuser = $('#typeuser :selected').val();
            var address = $('#address').val();


            /*     var arr = [];
                 $.each($("input[name='leveltype']:checked"), function () {
                     arr.push($(this).val());
                 });*/

            if (firstname == '') {
                Swal.fire({
                    type: "info",
                    title: 'نام و نام خانوادگی الزامیست ',
                    text: 'نام و نام خانوادگی مشتری را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (codemeli == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'کد ملی الزامیست ',
                    text: 'کد ملی مشتری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (mobile == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره موبایل الزامیست ',
                    text: 'شماره موبایل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (job == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شغل مشتری الزامیست ',
                    text: 'شغل را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (telephone == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تلفن ثابت الزامیست ',
                    text: 'تلفن ثابت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (accountno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره حساب الزامیست ',
                    text: 'شماره حساب را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardno == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره کارت الزامیست ',
                    text: 'شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (cardtitle == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'عنوان شماره کارت الزامیست ',
                    text: 'عنوان شماره کارت را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (shebacard == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'شماره شبا الزامیست ',
                    text: 'شماره شبا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (typeuser == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'نوع حساب کاربری الزامیست ',
                    text: 'نوع حساب کاربری را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('action', 'EditEmployee');
            dataform.append('firstname', firstname);
            dataform.append('codemeli', codemeli);
            dataform.append('mobile', mobile);
            dataform.append('job', job);
            dataform.append('telephone', telephone);
            dataform.append('datebirth', datebirth);
            dataform.append('email', email);
            dataform.append('accountno', accountno);
            dataform.append('cardno', cardno);
            dataform.append('cardtitle', cardtitle);
            dataform.append('shebacard', shebacard);
            dataform.append('typeuser', typeuser);
            dataform.append('address', address);
            dataform.append('Id', Id);


            axios.post('/portal/EmployeeActionServer',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ویرایش موفق آمیز',
                        text: 'اطلاعات پرسنل مورد نظر با موفقیت ویرایش شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });

                    setTimeout(function () {
                        window.location.assign('Employee');
                    }, 3000);
                } else if (response.data.status == 100) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.textmessage,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                } else if (response.data.status == 422) {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: response.data.errors,
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },

        NewProductPercent: function () {


            var titlePercent = $('#titlePercent').val();
            var percentProduct = $('#percentProduct').val();
            var feeGroup = $('#feeGroup').val();
            //   var unitGroup = $('#unitGroup').val();
            var unitPercent = $('#unitPercent :selected').val();


            if (titlePercent == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان گروه کالای الزامیست ',
                    text: 'عنوان گروه کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (percentProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'درصد الزامیست ',
                    text: 'درصد  کالای را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (feeGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'ارزش افزوده  کالای الزامیست ',
                    text: 'ارزش افزوده  کالای  را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (unitPercent == 0) {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد درصد  الزامیست ',
                    text: 'واحد  درصد را انتخاب کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } /*else if (this.TotalPercent == 0) {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: '  درصد الزامسیت',
                    text: 'لطفا مقدار درصد را وارد کنید',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }*/


            let dataform = new FormData();
            dataform.append('titlePercent', titlePercent);
            dataform.append('percentProduct', percentProduct);
            dataform.append('feeGroup', feeGroup);
            dataform.append('unitPercent', unitPercent);
            // dataform.append('TotalPercent', this.TotalPercent);


            axios.post('/portal/storePercentProduct',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ثبت موفق آمیز ',
                        text: 'گروه کالای جدید با موفقیت ثبت شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('PercentProduct');
                    }, 3000);
                } else if (response.data.status == 419) {

                    iziToast.error({
                        title: 'عنوان تخفیف',
                        message: response.data.message,
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreatePercentProduct');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },

        NewProductGroup: function () {


            var titleGroup = $('#titleGroup').val();
            var unitPercent = $('#unitPercent :selected').val();
            var weightProduct = $('#weightProduct').val();
            var priceproduct = $('#priceproduct').val();
            var statusProduct = $("#statususer").prop('checked') == true ? 'active' : 'inactive';

            if (titleGroup == '') {

                Swal.fire({
                    type: "info",
                    title: 'عنوان گروه کالای الزامیست ',
                    text: 'عنوان گروه کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;

            } else if (unitPercent == 0) {

                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد کالا الزامیست ',
                    text: 'واحد کالا را مشخص کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }

            if (unitPercent == 'meter') {
                if (weightProduct == '') {
                    Swal.fire({
                        type: "info",
                        icon: 'warning',
                        title: 'وزن کالا الزامسیت',
                        text: 'وزن کالا را وارد  کنید ',
                        position: "top-right",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'متوجه شدم',
                    });
                    return false;
                }
            } else if (unitPercent == 'numerical') {

                if (priceproduct == '') {
                    Swal.fire({
                        type: "info",
                        icon: 'warning',
                        title: 'قیمت کالا الزامسیت',
                        text: 'قیمت کالا را وارد  کنید ',
                        position: "top-right",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'متوجه شدم',
                    });
                    return false;
                }
            }


            let dataform = new FormData();
            dataform.append('titleGroup', titleGroup);
            dataform.append('unitPercent', unitPercent);
            dataform.append('weightProduct', weightProduct);
            dataform.append('priceproduct', priceproduct);
            dataform.append('statusProduct', statusProduct);


            axios.post('/portal/storeGroupProduct',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ثبت موفق آمیز ',
                        text: 'گروه کالای جدید با موفقیت ثبت شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('GroupProduct');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditGroupProduct: function (id) {


            var titleGroup = $('#titleGroup').val();
            var percentGroup = $('#percentGroup').val();
            var feeGroup = $('#feeGroup').val();
            var unitGroup = $('#unitGroup').val();


            if (titleGroup == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان گروه کالای الزامیست ',
                    text: 'عنوان گروه کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (percentGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'درصد گروه کالای الزامیست ',
                    text: 'درصد گروه کالای را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (feeGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'ارزش افزوده گروه کالای الزامیست ',
                    text: 'ارزش افزوده گروه کالای  را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (unitGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد گروه کالا الزامیست ',
                    text: 'واحد گروه کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('titleGroup', titleGroup);
            dataform.append('percentGroup', percentGroup);
            dataform.append('feeGroup', feeGroup);
            dataform.append('unitGroup', unitGroup);
            dataform.append('id', id);


            axios.post('/portal/UpdateProductGroup',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ویرایش موفق آمیز',
                        text: 'گروه کالای جدید با موفقیت ویرایش  شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/portal/GroupProduct');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditPercentProduct: function (id) {


            var titlePercent = $('#titlePercent').val();
            var percentProduct = $('#percentProduct').val();
            var feeGroup = $('#feeGroup').val();
            var unitPercent = $('#unitPercent option:selected').val();


            /*  var titleGroup = $('#titleGroup').val();
              var percentGroup = $('#percentGroup').val();
              var feeGroup = $('#feeGroup').val();
              var unitGroup = $('#unitGroup').val();*/


            if (titlePercent == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان گروه کالای الزامیست ',
                    text: 'عنوان گروه کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (percentProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'درصد الزامیست ',
                    text: 'درصد  کالای را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (feeGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'ارزش افزوده  کالای الزامیست ',
                    text: 'ارزش افزوده  کالای  را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (unitPercent == 0) {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد درصد  الزامیست ',
                    text: 'واحد  درصد را انتخاب کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('titlePercent', titlePercent);
            dataform.append('percentProduct', percentProduct);
            dataform.append('feeGroup', feeGroup);
            dataform.append('unitPercent', unitPercent);
            dataform.append('id', id);


            axios.post('/portal/UpdatePercentProduct',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ویرایش موفق آمیز',
                        text: 'درصد مورد نظر با موفقیت ویرایش شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/portal/PercentProduct');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditProduct: function (id) {


            var title = $('#titleProduct').val();
            var GroupProd = $('#GroupProd').find(':selected').val();
            var countProduct = $('#countProduct').val();
            var unitProduct = $('#unitProduct').val();
            /*  var weightProduct = $('#weightProduct').val();*/
            var priceProduct = $('#priceProduct').val();


            if (title == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان  کالای الزامیست ',
                    text: 'عنوان  کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (GroupProd == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: ' گروه کالای الزامیست ',
                    text: ' گروه کالای را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (countProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تعداد موجودی کالا را وارد کنید ',
                    text: 'تعداد موجودی کالا را وارد کنید',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (unitProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد  کالا الزامیست ',
                    text: 'واحد  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } /*else if (weightProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'وزن  کالا الزامیست ',
                    text: 'وزن  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }*/ else if (priceProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'قیمت  کالا الزامیست ',
                    text: 'قیمت  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('title', title);
            dataform.append('GroupProd', GroupProd);
            dataform.append('count', countProduct);
            dataform.append('unit', unitProduct);
            // dataform.append('weight', weightProduct);
            dataform.append('id', id);
            dataform.append('price', priceProduct);


            axios.post('/portal/UpdateProduct',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ویرایش موفق آمیز',
                        text: ' کالا مورد نظر با موفقیت ویرایش شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/portal/Product');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {
                this.allerros = error.response.data.errors;
            });


        },

        EditFactor: function (id) {

            var totalfactor = $('#totalfactor').val();
            var datefactore = $('#datefactore').val();
            var projectname = $('#projectname').val();
            var taxcode = $('#taxcode').val();
            var number_paiman = $('#number_paiman').val();
            var address = $('#address').val();
            var extra_percent = $('#extra_percent').val();


            if (totalfactor == '') {
                Swal.fire({
                    type: "info",
                    title: 'قیمت کل فاکتور   الزامیست ',
                    text: 'قیمت کل فاکتور را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (datefactore == '') {
                Swal.fire({
                    type: "info",
                    title: 'تاریخ  الزامیست ',
                    text: 'تاریخ فاکتور را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (projectname == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان پروژه  الزامیست ',
                    text: 'عنوان پروژه را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (address == '') {
                Swal.fire({
                    type: "info",
                    title: ' آدرس   الزامیست ',
                    text: 'آدرس   را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('totalfactor', totalfactor);
            dataform.append('datefactore', datefactore);
            dataform.append('projectname', projectname);
            dataform.append('taxcode', taxcode);
            dataform.append('number_paiman', number_paiman);
            dataform.append('address', address);
            dataform.append('extra_percent', extra_percent);
            dataform.append('id', id);


            axios.post('/portal/UpdateFactor',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'قیمت فاکتور',
                        text: ' مبلغ فاکتور با موفقیت بروز رسانی شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        EditCountItemFactor: function (id) {


            var QtyOrder = $(`#QtyOrder${id}`).val();

            if (QtyOrder == '') {
                Swal.fire({
                    type: "info",
                    title: 'قیمت کل فاکتور   الزامیست ',
                    text: 'قیمت کل فاکتور را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('QtyOrder', QtyOrder);
            dataform.append('id', id);


            axios.post('/portal/UpdateItemFactor',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'تعداد سفارش کالا',
                        text: ' تعداد سفارش کالا با موفقیت به روز رسانی شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },


        NewProduct: function () {


            //var title = $('#titleProduct').val();

            var titleProduct = $('select[name="titleProduct"]').find(":selected").val();
            var PercentGroup = $('#PercentGroup').find(':selected').val();
            var countProduct = $('#countProduct').val();
            var unitProduct = $('#unitProduct').val();
            /*   var weightProduct = $('#weightProduct').val();*/
            var priceProduct = $('#priceProduct').val();
            var desc = tinyMCE.get('basic-conf').getContent();
            var statusProduct = $("#statususer").prop('checked') == true ? 'active' : 'inactive';


            if (titleProduct == '') {
                Swal.fire({
                    type: "info",
                    title: 'عنوان  کالای الزامیست ',
                    text: 'عنوان  کالای را وارد کنید ',
                    position: "top-right",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (PercentGroup == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: ' گروه کالای الزامیست ',
                    text: ' گروه کالای را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (countProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'تعداد موجودی کالا را وارد کنید ',
                    text: 'تعداد موجودی کالا را وارد کنید',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } else if (unitProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'واحد  کالا الزامیست ',
                    text: 'واحد  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            } /*else if (weightProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'وزن  کالا الزامیست ',
                    text: 'وزن  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }*/ else if (priceProduct == '') {
                Swal.fire({
                    type: "info",
                    icon: 'warning',
                    title: 'قیمت  کالا الزامیست ',
                    text: 'قیمت  کالا را وارد کنید ',
                    position: "top-right",
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }


            let dataform = new FormData();
            dataform.append('titleProduct', titleProduct);
            dataform.append('PercentGroup', PercentGroup);
            dataform.append('count', countProduct);
            dataform.append('unit', unitProduct);
            /*  dataform.append('weight', weightProduct);*/
            dataform.append('price', priceProduct);
            dataform.append('desc', desc);
            dataform.append('statusProduct', statusProduct);

            dataform.append('file', this.image);


            let loader = Vue.use(Loading, {

                dark: true, // default false
                text: 'لطفا شکیبا باشید سیستم در حال آپلود ...', // default 'Loading'
                loading: true, // default false
                background: '#fff',
                classes: ['myclass'] // array, object or string

            });


            axios.post('/portal/storeProduct',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    this.$loading(false);
                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ثبت موفق آمیز ',
                        text: ' کالای جدید با موفقیت ثبت شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('Product');
                    }, 3000);
                } else if (response.data.status == 419) {

                    this.$loading(false);
                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "info",
                        title: 'خطا',
                        text: 'گروه کالای یافت نشد',
                        position: "top-right",
                        icon: 'info',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('CreateProduct');
                    }, 3000);
                } else {
                    this.$loading(false);
                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {

                this.$loading(false);
                this.allerros = error.response.data.errors;

            });


        },
        AddBasket: function (ProdId) {


            var price = $('#price').val();
            var quantity = $('#quantity').find(':selected').val();


            if (quantity == 0) {
                Swal.fire({
                    type: "warning",
                    title: 'تعداد سفارش ',
                    text: ' تعداد سفارش را انتخاب کنید',
                    position: "center",
                    icon: 'warning',
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'متوجه شدم',
                });
                return false;
            }

            let dataform = new FormData();
            dataform.append('ProdId', ProdId);
            dataform.append('price', price);
            dataform.append('quantity', quantity);


            /*  let loader = Vue.use(Loading, {

                  dark: true, // default false
                  text: 'لطفا شکیبا باشید سیستم در حال آپلود ...', // default 'Loading'
                  loading: true, // default false
                  background: '#fff',
                  classes: ['myclass'] // array, object or string

              });*/


            axios.post('/NewCart',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //   this.$loading(false);
                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'سبد خرید ',
                        text: 'کالا با موفقیت به سبد خرید اضافه شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/Cart');
                    }, 3000);
                } else if (response.data.status == 401) {

                    Swal.fire({
                        type: "info",
                        title: response.data.MsgTitle,
                        text: response.data.Msg,
                        position: "top-right",
                        icon: 'info',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/Cart');
                    }, 3000);

                } else if (response.data.status == 419) {

                    Swal.fire({
                        type: "info",
                        title: 'خطا',
                        text: 'کالا قبلا در سبد خرید شما افزوده شده است',
                        position: "top-right",
                        icon: 'info',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/Cart');
                    }, 3000);
                } else if (response.data.status == 202) {

                    Swal.fire({
                        type: "success",
                        title: 'به روز رسانی کالا',
                        text: 'کالا با موفقیت به روز رسانی شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('/Cart');
                    }, 3000);
                } else {
                    // this.$loading(false);
                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {

                this.$loading(false);
                this.allerros = error.response.data.errors;

            });


        },
        SendVerifyEmail: function (userId) {


            //  var title = $('#titleGroup').val();


            let dataform = new FormData();
            dataform.append('userId', userId);


            axios.post('/SendVerifyEmail',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {


                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'ایمیل فعالسازی',
                        text: ' ایمیل فعالسازی با موفقیت ارسال شد',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });

                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {

                this.$loading(false);
                this.allerros = error.response.data.errors;

            });


        },
        NewFactor: function () {


            var userIdOrder = $('#userIdOrder').attr('data-id');
            // var OrderStatus = $('#OrderStatus').find(':selected').val();
            var Paymethod = $('#Paymethod').find(':selected').val();
            var messageNote = $('#messageNote').val();
            var nameproject = $('#nameproject').val();
            var number_paiman = $('#number_paiman').val();
            var codetax = $('#codetax').val();
            var Address = $('#Address').val();
            var extraValue = $('#extraValue').val();
            var totalPriceUser = $('#totalPriceUser').val();


            if (userIdOrder == '') {

                iziToast.error({
                    title: 'شناسه کاربر',
                    message: 'سفارش نا معتبر می باشد شناسه کاربری یافت نشد',
                    position: 'topLeft'
                });
                return false;
            } else if (Paymethod == 0) {
                iziToast.error({
                    title: 'شیوه پرداخت',
                    message: 'شیوه پرداخت را انتخاب کنید',
                    position: 'topLeft'
                });
                return false;

            } else if (nameproject == 0) {
                iziToast.error({
                    title: 'عنوان پروژه',
                    message: 'عنوان پروژه را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            } else if (Address == 0) {
                iziToast.error({
                    title: 'آدرس  ',
                    message: 'لطفا آدرس را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            }


            let dataform = new FormData();
            dataform.append('userIdOrder', userIdOrder);
            dataform.append('messageNote', messageNote);
            dataform.append('Paymethod', Paymethod);
            dataform.append('totalPriceUser', totalPriceUser);
            dataform.append('nameproject', nameproject);
            dataform.append('codetax', codetax);
            dataform.append('Address', Address);
            dataform.append('extraValue', extraValue);
            dataform.append('number_paiman', number_paiman);


            axios.post('/portal/NewFactor',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    Swal.fire({
                        type: "success",
                        title: 'صدور و ثبت فاکتور',
                        text: 'فاکتور با موفقیت ثبت و صادر شد تشکر از سفارش شما',
                        position: "top-right",
                        icon: 'success',
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                    setTimeout(function () {
                        window.location.assign('Factor');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        updateAboutPage: function () {


            // var desc = $('#basic-conf').val();

            var titlePageAbout = $('#titlePageAbout').val();
            var keywordPage = $('#keywordPage').val();
            var desc = tinyMCE.get('basic-conf').getContent();

            if (titlePageAbout == '') {

                iziToast.error({
                    title: 'عنوان صفحه ',
                    message: 'لطفا عنوان صفحه را وارد کنید',
                    position: 'topLeft'
                });
                return false;
            } else if (keywordPage == 0) {
                iziToast.error({
                    title: 'کلمات کلیدی صفحه',
                    message: 'لطفا کلمات کلیدی صفحه را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            } else if (desc == 0) {
                iziToast.error({
                    title: 'توضیحات صفحه',
                    message: 'لطفا توضیحات صفحه را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            }
            /*else if(OrderStatus == 0 )
            {
                iziToast.error({
                    title: 'وضعیت سفارش',
                    message: 'وضعیت سفارش را انتخاب کنید',
                    position: 'topLeft'
                });
            }*/


            let dataform = new FormData();
            dataform.append('titlePageAbout', titlePageAbout);
            dataform.append('keywordPage', keywordPage);
            dataform.append('desc', desc);


            axios.post('/portal/updateAboutPage',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        title: 'ویرایش صفحه درباره ما',
                        message: 'محتوا صفحه درباره ما با موفقیت ویرایش شد',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('MangePage');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        updateContactPage: function () {


            // var desc = $('#basic-conf').val();

            var titlePageContact = $('#titlePageContact').val();
            var keywordContactPage = $('#keywordContactPage').val();
            var telephone_one_shop = $('#telephone_one_shop').val();
            var telephone_two_shop = $('#telephone_two_shop').val();
            var telephone_third_shop = $('#telephone_third_shop').val();
            var emails_site = $('#emails_site').val();
            var addressCompany = tinyMCE.get('addressCompany').getContent();

            if (titlePageContact == '') {

                iziToast.error({
                    title: 'عنوان صفحه ',
                    message: 'لطفا عنوان صفحه را وارد کنید',
                    position: 'topLeft'
                });
                return false;
            } else if (keywordContactPage == 0) {
                iziToast.error({
                    title: 'کلمات کلیدی صفحه',
                    message: 'لطفا کلمات کلیدی صفحه را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            } else if (addressCompany == 0) {
                iziToast.error({
                    title: 'آدرس شرکت ',
                    message: 'لطفا آدرس شرکت را وارد کنید',
                    position: 'topLeft'
                });
                return false;

            }


            let dataform = new FormData();
            dataform.append('titlePageContact', titlePageContact);
            dataform.append('keywordContactPage', keywordContactPage);
            dataform.append('telephone_one_shop', telephone_one_shop);
            dataform.append('telephone_two_shop', telephone_two_shop);
            dataform.append('telephone_third_shop', telephone_third_shop);
            dataform.append('emails_site', emails_site);
            dataform.append('addressCompany', addressCompany);


            axios.post('/portal/updateContactPage',
                dataform,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        title: 'ویرایش صفحه تماس با ما',
                        message: 'اطلاعات تماس با موفقیت به روز رسانی شد',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('MangePage');
                    }, 3000);
                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },
        DeleteCartItem(cartId) {


            Swal.fire({
                title: 'آیا قصد حذف کالا از سبد خرید  مورد نظر را دارید ؟',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `بله`,
                denyButtonText: `خیر`,
                cancelButtonText: `لغو`,
            }).then(function (result) {

                if (result.isConfirmed) {
                    axios.post('/portal/DeleteCartItem', {
                        cartId: cartId

                    }).then(response => {

                        if (response.data.status == 200) {

                            iziToast.success({
                                title: 'حذف کالا از سبد خرید ',
                                message: 'محصول از سبد خرید شما با موفقیت حذف شد',
                                position: 'topLeft'
                            });


                            /*swal("محصول از سبد خرید شما با موفقیت حذف شد", {
                                icon: "success",
                                button: "باشه"
                            });*/

                            setTimeout(function () {
                                window.location.assign('CreateFactor');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });


                } else if (result.isDenied) {

                    iziToast.info({
                        title: 'حذف ناموفق',
                        message: 'مجددا تلاش کنید',
                        position: 'topLeft'
                    });


                }
            });
        },
        DeleteCartItemFactor(FactorId) {


            Swal.fire({
                title: 'آیا قصد دارید کالا مورد نظر از فاکتور حذف کنید ؟ ',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `بله`,
                denyButtonText: `خیر`,
                cancelButtonText: `لغو`,
            }).then(function (result) {

                if (result.isConfirmed) {
                    axios.post('/portal/DeleteCartItemFactor', {
                        FactorId: FactorId

                    }).then(response => {

                        if (response.data.status == 200) {

                            iziToast.success({
                                title: 'حذف کالا از فاکتور',
                                message: 'کالا مورد نظر از فاکتور حذف شد',
                                position: 'topLeft'
                            });



                            setTimeout(function () {
                                window.location.assign('CreateFactor');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Category');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });


                } else if (result.isDenied) {

                    iziToast.info({
                        title: 'حذف ناموفق',
                        message: 'مجددا تلاش کنید',
                        position: 'topLeft'
                    });


                }
            });
        },
        ChangeStatusOrder(type, id) {

            Swal.fire({
                title: 'مطمئن هستی وضعیت سفارش به روز رسانی شود؟',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `بله`,
                denyButtonText: `خیر`,
                cancelButtonText: `لغو`,
            }).then(function (result) {

                if (result.isConfirmed) {
                    axios.post('/portal/ChangeStatusOrder', {
                        id: id,
                        type: type,

                    }).then(response => {

                        if (response.data.status == 200) {

                            iziToast.success({
                                title: 'وضعیت سفارش',
                                message: 'وضعیت سفارش با موفقیت به روز رسانی شد',
                                position: 'topLeft'
                            });


                            setTimeout(function () {
                                window.location.assign('Factor');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Factor');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });


                } else if (result.isDenied) {

                    iziToast.info({
                        title: 'خطا',
                        message: 'مجددا تلاش کنید',
                        position: 'topLeft'
                    });


                }
            });
        },
        DeleteFactor(id) {


            Swal.fire({
                title: 'مطمئن هستی فاکتور مورد نظر حذف شود؟',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `بله`,
                denyButtonText: `خیر`,
                cancelButtonText: `لغو`,
            }).then(function (result) {

                if (result.isConfirmed) {
                    axios.post('/portal/DeleteFactor', {
                        id: id,


                    }).then(response => {

                        if (response.data.status == 200) {

                            iziToast.success({
                                title: 'حذف فاکتور ',
                                message: 'فاکتور مورد نظر با موفقیت حذف شد',
                                position: 'topLeft'
                            });


                            setTimeout(function () {
                                window.location.assign('Factor');
                            }, 2000);

                        } else if (response.data.status == 100) {
                            swal("حذف ناموفق مجددا تلاش کنید", {
                                icon: "warning",
                                button: "باشه"
                            });
                            setTimeout(function () {
                                window.location.assign('Factor');
                            }, 2000);
                        }


                    }, response => {
                        this.error = 1;
                        console.log("error");
                    });


                } else if (result.isDenied) {

                    iziToast.info({
                        title: 'خطا',
                        message: 'مجددا تلاش کنید',
                        position: 'topLeft'
                    });


                }
            });
        },
        OrderProduct: function (PID) {


            // var userId = $('select[name="userId"]').find(":selected").val();

            var userId = $('select[name="userId"]').find(":selected").val();
            //var userId=$("#orderUserId").val();

            var qtyProduct = $(`#qtyProduct${PID}`).val();
            //  var qtyProduct = $('#qtyProduct').attr('value');

            //  alert(this.TotalAmount);


            if (qtyProduct == '') {

                iziToast.warning({
                    title: 'تعداد الزامیست',
                    message: 'تعداد سفارش را وارد کنید ',
                    position: 'topLeft'
                });

                return false;
            }
            if (userId == 0) {

                iziToast.warning({
                    title: 'انتخاب مشتری  الزامیست',
                    message: 'لطفا مشتری مورد نظر را انتخاب کنید ',
                    position: 'topLeft'
                });

                return false;
            }


            let dataform = new FormData();
            dataform.append('PID', PID);
            dataform.append('qtyProduct', qtyProduct);
            dataform.append('userId', userId);


            axios.post('/portal/storeFactor',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        title: 'سبد سفارش کالا',
                        message: 'کالا مورد نظر با موفقیت به سبد سفارش افزوده شد ',
                        position: 'topLeft'
                    });

                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);
                } else if (response.data.status == 302) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'درخواست سفارش نامعتبر',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 404) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'درخواست سفارش نامعتبر',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 401) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'انتخاب مشتری',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 301) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        message: response.data.message,
                        title: 'به روز رسانی سفارش ',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 304) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        message: response.data.message,
                        title: 'به روز رسانی سفارش ',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },

        OrderProductToFactor: function (PID, UID) {


            // var userId = $('select[name="userId"]').find(":selected").val();

            var userId = UID;
            //var userId=$("#orderUserId").val();

            var qtyProduct = $(`#qtyProduct${PID}`).val();
            //  var qtyProduct = $('#qtyProduct').attr('value');
            //  alert(this.TotalAmount);

            if (qtyProduct == '') {

                iziToast.warning({
                    title: 'تعداد الزامیست',
                    message: 'تعداد سفارش را وارد کنید ',
                    position: 'topLeft'
                });

                return false;
            }
            if (userId == 0) {

                iziToast.warning({
                    title: 'انتخاب مشتری  الزامیست',
                    message: 'لطفا مشتری مورد نظر را انتخاب کنید ',
                    position: 'topLeft'
                });

                return false;
            }


            let dataform = new FormData();
            dataform.append('PID', PID);
            dataform.append('qtyProduct', qtyProduct);
            dataform.append('userId', userId);
            dataform.append('factorId', $("#factorId").val());


            axios.post('/portal/AddItemFactor',
                dataform,
                {
                    headers: {

                        'Content-Type': 'multipart/form-data'
                    }

                }).then(response => {


                if (response.data.status == 200) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        title: 'سبد سفارش کالا',
                        message: 'کالا مورد نظر با موفقیت به سبد سفارش افزوده شد ',
                        position: 'topLeft'
                    });

                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);
                } else if (response.data.status == 302) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'درخواست سفارش نامعتبر',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 404) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'درخواست سفارش نامعتبر',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 401) {

                    //window.location.assign('/User/Confirm');
                    iziToast.error({
                        message: response.data.message,
                        title: 'انتخاب مشتری',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 301) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        message: response.data.message,
                        title: 'به روز رسانی سفارش ',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else if (response.data.status == 304) {

                    //window.location.assign('/User/Confirm');
                    iziToast.success({
                        message: response.data.message,
                        title: 'به روز رسانی سفارش ',
                        position: 'topLeft'
                    });
                    setTimeout(function () {
                        window.location.assign('CreateFactor');
                    }, 3000);

                } else {

                    Swal.fire({
                        type: "warning",
                        title: 'خطا ',
                        text: 'مجددا تلاش کنید',
                        position: "top-left",
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'باشه',
                    });
                }


            }).catch((error) => {


                this.allerros = error.response.data.errors;

            });


        },

        VerifySMSCode: function () {


            //alert($("#mobile_code").val());
            if (this.verify_code == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'کد تایید',
                    text: 'لطفا کد تایید عضویت را وارد کنید',
                    footer: ''
                })
                //alert('لطفا کد تایید عضویت را وارد کنید');
            } else {
                axios.post('/checkCodeSMS', {

                    CodeSMS: this.verify_code,
                    mobile: $("#mobile_code").val()

                }).then(response => {


                    if (response.data['status'] == 'success') {


                        window.location.assign(response.data['url']);

                    } else if (response.data['status'] == 'faild') {


                        alert('کد تایید اشتباه هست مجددا تلاش کنید');
                    }


                }, response => {
                    swal(" خطا ", "خطا کد تایید اشتباه هست ", "error", {
                        button: "باشه"
                    });
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        ForgotPassword: function () {


            if (this.mobile_forgot == '') {
                swal("خطا", "شماره موبایل خود را وارد کنید", "info", {
                    button: "باشه"
                });
            } else {
                axios.post('/ForgotPassword', {

                    mobile_forgot: this.mobile_forgot,


                }).then(response => {


                    if (response.data.status == 200) {

                        swal("رمز عبور ", "رمز عبور موقت با موفقیت ارسال شد", "success", {
                            button: "باشه"
                        });
                        $("#codebox").show();
                        $("#btnforgot").hide();
                        $("#btnSavePasswordNew").show();

                    } else if (response.data.status == 404) {

                        swal("خطا", "شماره موبایل پیدا نشد", "warning", {
                            button: "باشه"
                        });

                    }


                }, response => {
                    swal(" خطا ", "خطا کد تایید اشتباه هست ", "error", {
                        button: "باشه"
                    });
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        UpdatePasswordNew: function () {


            if (this.code_temp == '') {
                swal("خطا", "رمز عبور موقت را وارد کنید", "info", {
                    button: "باشه"
                });
            } else if (this.new_password == '') {
                swal("خطا", "رمز عبور جدید را وارد کنید", "info", {
                    button: "باشه"
                });
            } else {
                axios.post('/UpdatePassword', {
                    mobile_forgot: this.mobile_forgot,
                    new_password: this.new_password,
                    code_temp: this.code_temp,
                }).then(response => {


                    if (response.data.status == 200) {

                        window.location.assign(response.data['url']);

                    } else if (response.data.status == 404) {

                        swal("خطا", "رمز عبور موقت اشتباه هست", "warning", {
                            button: "باشه"
                        });

                    } else if (response.data.status == 100) {

                        swal("خطا", "خطا در عملیات", "warning", {
                            button: "باشه"
                        });

                    }


                }, response => {
                    swal(" خطا ", "خطا کد تایید اشتباه هست ", "error", {
                        button: "باشه"
                    });
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        EditRequest: function (Id) {

            var Posselected = $("#Posselected").val();
            var estateSelected = $("#estateSelected").val();
            var namereq = $('input[name="namereq"]').val();
            var mobile = $('input[name="mobile"]').val();
            var pricefrom = $('input[name="pricefrom"]').val();
            var priceto = $('input[name="priceto"]').val();


            if (namereq == "") {
                toastr.info('لطفا نام خود را وارد کنید');
                $("#namereq").addClass('input_alert');
                $('#namereq').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (namereq != "") {
                $("#nameOffer").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }

            if (mobile == "") {
                toastr.info('لطفا شماره موبایل درخواست کننده رار وارد کنید');
                $("#mobile").addClass('input_alert');
                $('#mobile').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (mobile != "") {
                $("#mobile").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (pricefrom == "") {
                toastr.info('لطفا حداقل قیمت را وارد کنید');
                $("#pricefrom").addClass('input_alert');
                $('#pricefrom').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (pricefrom != "") {
                $("#pricefrom").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }
            if (priceto == "") {
                toastr.info('لطفا حداقل قیمت را وارد کنید');
                $("#priceto").addClass('input_alert');
                $('#priceto').after('<span class="invalid-feedback3"> انتخاب فیلد الزامسیت </span>');
            } else if (priceto != "") {
                $("#priceto").removeClass('input_alert');
                $(".invalid-feedback3").hide('invalid-feedback');
            }


            if (namereq != '' && mobile != '' && pricefrom != ''
                && priceto != '') {
                axios.post('/admin/EditRequestOffer', {


                    Id: Id,
                    namereq: namereq,
                    mobile: mobile,
                    pricefrom: pricefrom,
                    priceto: priceto,
                    Posselected: Posselected,
                    estateSelected: estateSelected,


                }).then(response => {

                    console.log(response.data.status);

                    if (response.data.status == 100) {

                        toastr.success('درخواست شما با موفقیت ویرایش شد');

                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);

                    } else {

                        toastr.info('مشتری گرامی قبلا درخواست شما ثبت شده در حال بررسی هستیم');
                    }


                }, response => {
                    this.error = 1;
                    console.log("error");
                });
            }


        },

        onImageChange(e) {

            const files = e.target.files;
            Array.from(files).forEach(file => this.addImage(file));
        },
        addImage(file) {

            if (!file.type.match('image.*')) {
                console.log(`${file.name} is not an image`);
                return;
            }
            this.files.push(file);
            const img = new Image(),
                reader = new FileReader();
            reader.onload = (e) => this.images.push(e.target.result);
            reader.readAsDataURL(file);
        },


        CalculateRent: function () {


            var RentPrice = $("#RentPrice").val();
            var rahanPrice = $("#rahanPrice").val();


            axios.post('CalculateRent', {


                RentPrice: RentPrice,
                rahanPrice: rahanPrice


            }).then(response => {


                if (response.data.status == 100) {
                    // $("#amount_receive_rent").html(commaSeparateNumber(response.data.result)+'تومان');

                    $("#amount_receive_rentlandlord").html('  سهم پرداختی مستاجر    : ' + commaSeparateNumber(response.data.result) + ' تومان ');

                    $("#amount_receive_rentRented").html('  سهم پرداختی موجر    : ' + commaSeparateNumber(response.data.result) + ' تومان ');


                } else {
                    toastr.info('متاسفانه سیستم دچار مشکل شد مجددا تلاش کنید  ');
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        CalculateSale: function () {


            var number_under = $("#number_under").val();


            axios.post('CalculateSale', {


                number_under: number_under,


            }).then(response => {


                console.log(response.data);


                if (response.data.status == 101) {

                    $("#amount_receive_underhundred").html(commaSeparateNumber(response.data.result) + 'تومان' + '<br/>');

                    $("#amount_receive_divide").html('  سهم پرداختی خریدار    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                    $("#amount_receive_divideseller").html('  سهم پرداختی فروشنده    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                } else if (response.data.status == 100) {
                    $("#amount_receive_underhundred").html(commaSeparateNumber(response.data.result) + 'تومان');

                    $("#amount_receive_divide").html('  سهم پرداختی خریدار    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                    $("#amount_receive_divideseller").html('  سهم پرداختی فروشنده    : ' + commaSeparateNumber(parseInt(response.data.share)) + ' تومان ');

                } else {
                    toastr.info('متاسفانه سیستم دچار مشکل شد مجددا تلاش کنید  ');
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        commaSeparateNumber: function (val) {
            while (/(\d+)(\d{3})/.test(val.toString())) {
                val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
            }
            return val;
        },
        UpdateinfoSite: function () {


            var email = $('input[name="email_site"]').val();
            var phone_Sellerone = $('input[name="phone_Sellerone"]').val();
            var phone_Sellertwo = $('input[name="phone_Sellertwo"]').val();
            var realestateAddress = $('input[name="realestateAddress"]').val();


            axios.post('/admin/updateinfosite', {

                email: email,
                phoneone: phone_Sellerone,
                phonetwo: phone_Sellertwo,
                Address: realestateAddress

            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات تماس با ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        AddReport: function () {


            var descreport = $('textarea[name="descreport"]').val();
            var descresultreport = $('textarea[name="descresultreport"]').val();

            if (descreport == '') {
                swal(" خطا  ", "فیلد شرح گزارش خالی هست ", "info", {
                    button: "متوجه شدم"
                });
                return false;

            } else if (descresultreport == '') {
                swal(" خطا  ", "فیلد نتیجه گزارش خالی هست ", "info", {
                    button: "متوجه شدم"
                });
                return false;
            }


            axios.post('/User/ActionServer', {


                action: 'AddReport',
                titlereport: this.titlereport,
                descreport: descreport,
                descresultreport: descresultreport,
                resultstatus: this.resultstatus,


            }).then(response => {

                if (response.data.status == 200) {

                    swal("ثبت  ", "تشکر از شما گزارش شما با موفقیت ثبت شد خسته نباشید ", "success", {
                        button: "ممنونم"
                    });
                    //alert('با موفقیت گزارش ثبت شد تشمکر از شما');
                    setTimeout(function () {
                        window.location.assign('/admin/index');
                    }, 2000);

                }


            }, response => {

                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        SendVisitSMS: function (Id) {


            axios.post('/admin/SendVisitSMS', {


                Id: Id

            }).then(response => {
                console.log(response.data);


                if (response.data['status'] == 100) {
                    swal("هشدار ", "خطا", "warning", {
                        button: "متوجه شدم"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 200) {
                    swal("پیامک موفق آمیز ", "بازدید با موفقیت پیامک شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);

                }


            }, response => {

                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },
        AddReportOperator: function () {


            var descreport = $('textarea[name="descreport"]').val();
            var descresultreport = $('textarea[name="descresultreport"]').val();

            axios.post('/admin/addReport', {


                titlereport: this.titlereport,
                descreport: descreport,
                descresultreport: descresultreport,
                resultstatus: this.resultstatus,


            }).then(response => {


                if (response.data['status'] == 400) {
                    swal("هشدار ", "لطفا تمام فیلد ها را پر کنید", "warning", {
                        button: "متوجه شدم"
                    });
                    /*  setTimeout(function () {
                          location.reload();
                      },2000);*/
                } else if (response.data['status'] == 200) {
                    swal("ثبت گزارش ", "گزارش شما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (response.data['status'] == 300) {
                    swal("خطا  ", "مجددا تلاش کنید", "info", {
                        button: "باشه"
                    });

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        AddFavorite: function (estateId) {


            axios.post('/AddFavoriteEstate', {

                estateId: estateId

            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات تماس با ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },

        PublishTextAbout: function () {


            var titleAbout = CKEDITOR.instances['editor-demo3'].getData();
            var planAbout = CKEDITOR.instances['editor-demo2'].getData();


            axios.post('/admin/updateAboutText', {

                titleAbout: titleAbout,
                planAbout: planAbout,


            }).then(response => {
                console.log(response.data.status);


                if (response.data['status'] == 100) {
                    swal("ثبت موفق ", "اطلاعات    درباره ما با موفقیت ثبت شد", "success", {
                        button: "باشه"
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(response.data);

                }


            }, response => {
                swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                    button: "باشه"
                });
                this.error = 1;
                console.log("error");
            });


        },


        regionSelectedSearch: function (id) {


            this.regionselectedSearch = id;

            $("#regionselect").val(id);
            this.regionrequestOffer = id;


            /* var d= types.addClass('a_checked');
              console.log(d);
              if (d.hasClass('a_checked')){
                  alert('yes');
                  d.removeClass('a_checked');
              }else {
                  alert('no');
                  d.addClass('a_checked');

                 /!*  arr[i++] = this.getAttribute('data-val');
                  if ($.inArray(this.getAttribute('data-val'), list_possibi) == -1) {
                      list_possibi.push(this.getAttribute('data-val'));
                      $("#Posselected").val(list_possibi.join());

                  }*!/

              }*/


            /*var d = e.target();
            alert(d);

            console.log(d.textContent);
            if (d.hasClass('a_checked')){
                alert('yes');
                d.removeClass('a_checked');
            }else {
                alert('no');
                d.addClass('a_checked');

               /!* arr[i++] = this.getAttribute('data-val');
                if ($.inArray(this.getAttribute('data-val'), list_possibi) == -1) {
                    list_possibi.push(this.getAttribute('data-val'));
                    $("#Posselected").val(list_possibi.join());

                }*!/

            }*/


        },
        CityActive: function (subscription) {


            this.city_user = subscription;
        },
        regionActive: function (subscription) {

            alert(this.regionselect_user);
            this.regionselect_user = subscription;
        },
        EstatetypeActive: function (subscription) {


            $("#estatetypevalue").val(subscription);
            this.estatetype_user = subscription;
            // $("#estateselect").val(subscription);
            this.estatetype_userOffer = subscription;

        },
        UsageTypeActive: function (subscription) {

            this.usagetype_user = subscription;
        },
        RequestTourActive: function (subscription) {

            this.requestTour_user = subscription;
        },
        EstateOwenrshipActive: function (subscription) {

            this.ownership_user = subscription;
        },
        PositionActive: function (subscription) {

            this.position_type_user = subscription;
        },

        YearSelect: function (subscription) {

            $("#yearselect").val(subscription);

        },
        RoomNumberSelect: function (subscription) {

            $("#RoomNumberSelect").val(subscription);

        }


    },
    components: {
        LoadingPlugin,
        Loading
    },
});
