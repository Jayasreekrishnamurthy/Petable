<div class="widget meta-boxes form-actions form-actions-default action-{{ $direction ?? 'horizontal' }}">
    <div class="widget-title">
        <h4>
            @if (!empty($icon))
                <i class="{{ $icon }}"></i>
            @endif
            <span>{{ $title ?? apply_filters(BASE_ACTION_FORM_ACTIONS_TITLE, trans('core/base::forms.publish')) }}</span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
            @php do_action(BASE_ACTION_FORM_ACTIONS, 'default') @endphp
            @if (!isset($onlySave) || !$onlySave)
                <button
                    class="btn btn-info"
                    name="submitter"
                    type="submit"
                    value="save"
                >
                    <i class="{{ $saveIcon ?? 'fa fa-save' }}"></i> {{ $saveTitle ?? trans('core/base::forms.save') }}
                </button>
            @endif
            &nbsp;
            <button
                class="btn btn-success"
                name="submitter"
                type="submit"
                value="apply"
            >
                <i class="fa fa-check-circle"></i> {{ trans('core/base::forms.save_and_continue') }}
            </button>

            {!! apply_filters('base_action_form_actions_extra', null) !!}
        </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    {!! Breadcrumbs::render('main', PageTitle::getTitle(false)) !!}
    <div class="btn-set">
        @php do_action(BASE_ACTION_FORM_ACTIONS, 'fixed-top') @endphp
        @if (!isset($onlySave) || !$onlySave)
            <button
                class="btn btn-info"
                name="submitter"
                type="submit"
                value="save"
            >
                <i class="{{ $saveIcon ?? 'fa fa-save' }}"></i> {{ $saveTitle ?? trans('core/base::forms.save') }}
            </button>
        @endif

        &nbsp;
        <button
            class="btn btn-success"
            name="submitter"
            type="submit"
            value="apply"
        >
            <i class="fa fa-check-circle"></i> {{ trans('core/base::forms.save_and_continue') }}
        </button>

        {!! apply_filters('base_action_form_actions_extra', null) !!}
    </div>
</div>
