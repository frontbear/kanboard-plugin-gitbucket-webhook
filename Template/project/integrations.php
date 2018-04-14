<h3><i class="fa fa-github fa-fw"></i>&nbsp;<?= t('Gitbucket webhooks') ?></h3>
<div class="panel">
    <input type="text" class="auto-select" readonly="readonly" value="<?= $this->url->href('Webhook', 'handler', array('plugin' => 'GitbucketWebhook', 'token' => $webhook_token, 'project_id' => $project['id']), false, '', true) ?>"/><br/>
    <p class="form-help"><a href="https://github.com/kanboard/plugin-github-webhook#documentation" target="_blank"><?= t('Help on Gitbucket webhooks') ?></a></p>
</div>
