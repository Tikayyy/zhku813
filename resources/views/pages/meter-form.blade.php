@extends('layouts/main-layout')

@section('title','ЖКУ №813')

@section('main-class','extended-bottom')
@section('main-div-class','image-banner no-main')

@section('content')
        <section>
            <div class="justify-center">
                <h2>Отправить показания счетчиков</h2>
            </div>

            <script>
                const onSubmitForm = function(event, form) {
                    let hasErrors = false;

                    function getValues(attrValue){
                        let result = '';
                        const values = document.querySelectorAll('[name="' + attrValue + '"');
                        for(let i = 0; i < values.length; i++) {
                            let item = values[i];
                            let text = item.textContent.trim();
                            const maxLength = parseInt(item.getAttribute('maxlength'));
                            const digitLength = text.length;
                            if(digitLength !== text.length) {
                                item.focus();
                                hasErrors = true;
                                item.classList.add('has-error');
                                item.title = 'Неверный формат ввода. Введите только цифры.'
                            } else if (item.classList.contains('has-error')) {
                                item.classList.remove('has-error')
                            }

                            if (text.length < maxLength) {
                                text = text.trim().split('');

                                if (!text.length) return '';

                                new Array(maxLength - text.length).fill('0').forEach(function(_item) {
                                    text.push(_item);
                                });
                                text = text.join('')
                            }

                            result += text + ';'
                        }


                        return result;
                    }

                    form.schet_gvs.value = getValues('gvs');
                    form.schet_hvs.value = getValues('hvs');
                    form.schet_eln.value = getValues('eln');

                    if (hasErrors) {
                        event.preventDefault();
                        return false;
                    }
                }
            </script>

            <style>
                .meterForm-row-label{
                    width:305px;
                }
                .meterForm-row-input input,
                .meterForm-row-input select{
                    width:305px;
                }
            </style>
            <form action="" method="POST" id="meterForm" class="main-form" onsubmit="onSubmitForm(event, this)">

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="fio">Номер счета</label>
                    </div>
                    <div class="meterForm-row-input">
                        <input type="text" value="" name="account" id="account">
                    </div>
                </div>

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="fio">Фамилия</label>
                    </div>
                    <div class="meterForm-row-input">
                        <input type="text" value="" name="fio" id="fio">
                    </div>
                </div>

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="address">Улица и номер дома</label>
                    </div>
                    <div class="meterForm-row-input">
                        <select id="address" name="address" onchange="resetMeters()">
                            <option></option>
                            <option value="1">ул. Воткинское шоссе , дом 116</option><option value="2">ул. Воткинское шоссе , дом 116А</option><option value="3">ул. Герцена, дом 8, корпус 1</option>
                        </select>
                    </div>
                </div>

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="address2">Номер квартиры</label>
                    </div>
                    <div class="meterForm-row-input">
                        <input type="text" id="address2" name="flat_number" >
                    </div>
                </div>

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="address2">Номер телефона (необязательно)</label>
                    </div>
                    <div class="meterForm-row-input">
                        <input type="phone" id="address2" name="phone_number"  >
                    </div>
                </div>

                <div class="justify-center align-center">
                    <div class="meterForm-row-label">
                        <label for="address2">Электронная почта (необязательно)</label>
                    </div>
                    <div class="meterForm-row-input">
                        <input type="email" id="address2" name="email" >
                    </div>
                </div>

                <section class="ref-meter-any">
                    <div class="justify-center"><p>
                            Показания счётчиков
                        </p></div>

                    <section class="ref-meter-anyWater">

                        <div class="justify-center"><b>Пример заполнения показаний счетчика воды:</b></div>
                        <div class="justify-center"><img src="../images/water_counter.png" alt=""></div>

                        <section class="ref-meter-hotWater">
                            <div class="justify-center align-center">
                                <b>Счётчики ГВС</b>
                            </div>

                            <div class="justify-center align-center">
                                <div class="inputs" id="gsv">
                                    <input type="hidden" id="schet_gsv" name="schet_gvs">
                                    <div contenteditable
                                         title="Введите значение счётчика горячей воды"
                                         class="value-input"
                                         maxlength="6"
                                         name="gvs"></div>
                                </div>
                            </div>
                        </section>
                        <section class="ref-meter-coldWater">
                            <div class="justify-center align-center">
                                <b>Счётчики ХВС</b>
                            </div>

                            <div class="justify-center align-center">
                                <div class="inputs" id="hsv">
                                    <input type="hidden" id="schet_hsv" name="schet_hvs">
                                    <div contenteditable
                                         title="Введите значение счётчика холодной воды"
                                         class="value-input"
                                         maxlength="6"
                                         name="hvs"></div>
                                </div>
                            </div>
                        </section>
                    </section>

                    <section class="ref-meter-electro">
                        <div class="justify-center">
                            <b>Пример заполнения показаний счетчика электроэнергии:</b>
                        </div>
                        <div class="justify-center">
                            <img src="../images/el_counter.png" alt="">
                        </div>

                        <div class="justify-center align-center">
                            <b>Счётчики ЭЛ/Н:</b>
                        </div>

                        <div class="justify-center align-center">
                            <div class="inputs" id="xsv">
                                <input type="hidden" id="schet_eln" name="schet_eln">
                                <div contenteditable
                                     title="Введите значение счётчика холодной воды"
                                     class="value-input"
                                     maxlength="6"
                                     name="eln"></div>
                            </div>
                        </div>
                    </section>
                </section>

                <div class="justify-center">
                    <div><input type="submit" value="Отправить"></div>
                </div>

            </form>

            <script>
                const valueInputListeners = [];
                const addBtns = document.querySelectorAll('[data-add-value-input]') ;
                const keys = {
                    'backspace': 8,
                    'shift': 16,
                    'ctrl': 17,
                    'alt': 18,
                    'delete': 46,
                    'leftArrow': 37,
                    'upArrow': 38,
                    'rightArrow': 39,
                    'downArrow': 40,
                };

                const utils = {
                    special: {},
                    navigational: {},
                    isSpecial: function(e) {
                        return typeof this.special[e.keyCode] !== 'undefined';
                    },
                    isNavigational: function(e) {
                        return typeof this.navigational[e.keyCode] !== 'undefined';
                    }
                };

                utils.special[keys['backspace']] = true;
                utils.special[keys['shift']] = true;
                utils.special[keys['ctrl']] = true;
                utils.special[keys['alt']] = true;
                utils.special[keys['delete']] = true;

                utils.navigational[keys['upArrow']] = true;
                utils.navigational[keys['downArrow']] = true;
                utils.navigational[keys['leftArrow']] = true;
                utils.navigational[keys['rightArrow']] = true;

                const CheckInput = function(e) {
                    const isMaxLength = e.target.textContent.trim().length >= parseInt(e.target.getAttribute('maxlength'));
                    const isSpecial = utils.isSpecial(event);
                    const isNavigational = utils.isNavigational(event);

                    if (e.target.classList.contains('has-error')) {
                        e.target.classList.remove('has-error');
                    }
                    if (isSpecial || isNavigational) {
                        return true;
                    }

                    if (isMaxLength) {
                        e.preventDefault();
                        e.stopPropagation();
                        return false
                    }
                };

                const setValueInputEvents = function() {
                    const valueInput = document.querySelectorAll('.value-input');

                    for(let i = 0; i < valueInput.length; i++) {
                        let input = valueInput[i];

                        if (!valueInputListeners.indexOf(input) > 0) {
                            input.textContent.length ? input.textContent : input.textContent = ' ';
                            input.addEventListener('keydown', CheckInput);
                            input.addEventListener('paste', CheckInput);
                            valueInputListeners.push(input);
                        }
                    }
                };

                setValueInputEvents();

                for(let i = 0; i < addBtns.length; i++) {
                    let btn = addBtns[i]
                    btn.addEventListener('click', function(ev) {
                        ev.preventDefault();
                        const name = ev.target.getAttribute('data-add-value-input');
                        const template = document.querySelector('.value-input[name="' + name + '"]');

                        const cloned = template.cloneNode(true);
                        cloned.textContent = '';
                        cloned.classList.add('added');
                        template.parentNode.appendChild(cloned);
                        setValueInputEvents();
                    })
                }


                const addressMeters = [{"id_address": 1,"title_address": "ул. Воткинское шоссе , дом 116","has_cold_water": 0,"has_hot_water": 1,"has_electro": 0},{"id_address": 2,"title_address": "ул. Воткинское шоссе , дом 116А","has_cold_water": 0,"has_hot_water": 1,"has_electro": 0},{"id_address": 3,"title_address": "ул. Герцена, дом 8, корпус 1","has_cold_water": 1,"has_hot_water": 1,"has_electro": 1}]
                const addressMetersMap = {};
                addressMeters.map((am) => addressMetersMap[am.id_address] = am);

                function resetMeters(){
                    const form = document.getElementById('meterForm');
                    const address = form ? form.address : null;
                    const elements = {
                        'anyWater': false,
                        'hotWater': false,
                        'coldWater': false,
                        'electro': false,
                        'any': false
                    }
                    if (address && address.value && addressMetersMap.hasOwnProperty(address.value)){
                        const address_obj = addressMetersMap[address.value];
                        elements.anyWater = address_obj.has_cold_water || address_obj.has_hot_water;
                        elements.hotWater = address_obj.has_hot_water;
                        elements.coldWater = address_obj.has_cold_water;
                        elements.electro = address_obj.has_electro;
                    }
                    elements.any = elements.anyWater || elements.electro;
                    for (let ec in elements){
                        if (elements.hasOwnProperty(ec)) {
                            var els = document.getElementsByClassName('ref-meter-' + ec);
                            for (let i = 0; i < els.length; i++) els[i].style.display = elements[ec] ? 'block' : 'none';
                        }
                    }
                }

                resetMeters();

            </script>
        </section>
    </main>
@endsection
