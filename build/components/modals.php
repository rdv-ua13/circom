<div id="modalAsk" class="modal">
	<div class="modal-overlay"></div>
	<div class="modal-wrapper modal-transition">
        <div class="decor">
            <svg class="decor__diamonds">
                <use href="/build/img/sprite.svg#decor-bg-modal"></use>
            </svg>
        </div>
		<span class="modal-close">
			<svg class="icon">
                <use href="/build/img/sprite.svg#close-cross"></use>
            </svg>
		</span>
		<div class="modal-body">
            <div class="h3 modal-title title-mb-big">Задать вопрос</div>
            <form id="formAsk" class="modal-form" action="" method="">
                <div class="block-mb-xsmall">
                    <select class="visually-hidden js-custom-select" name="formAsk[TOPIC]">
                        <option class="selected"
                                value="0"
                                selected
                        >
                            Тема вопроса
                        </option>
                        <option value="1">Тема вопроса 1</option>
                        <option value="2">Тема вопроса 2</option>
                        <option value="3">Тема вопроса 3</option>
                    </select>
                </div>
                <div class="block-mb-xsmall">
                    <input class="field-input"
                           type="text"
                           name="formAsk[FULLNAME]"
                           placeholder="ФИО"
                    >
                </div>
                <div class="block-mb-xsmall">
                    <input class="field-input"
                           type="email"
                           name="formAsk[EMAIL]"
                           placeholder="Ваш email"
                    >
                </div>
                <div class="block-mb-xsmall">
                    <textarea class="field-input comment-input"
                              type="text"
                              name="formAsk[COMMENT]"
                              placeholder="Текст обращения"
                    ></textarea>
                </div>
                <div class="block-mb-xsmall modal__btns">
                    <button class="btn" type="submit">
                        <span class="content-text">Отправить</span>
                    </button>
                    <button class="btn btn-noframe btn-reset" type="button">
                        <span class="content-text">Очистить форму</span>
                    </button>
                </div>
                <div class="modal__agree">
                    <input class="field-checkbox"
                           type="checkbox"
                           name="formAsk[AGREE]"
                    >
                    <div class="modal__agree-text">
                        <span>Я соглашаюсь на обработку персональных данных, согласно</span>
                        <a class="link" href="javascript:;">Политика по обработке Персональных данных</a>
                    </div>
                </div>

            </form>
		</div>
	</div>
</div>