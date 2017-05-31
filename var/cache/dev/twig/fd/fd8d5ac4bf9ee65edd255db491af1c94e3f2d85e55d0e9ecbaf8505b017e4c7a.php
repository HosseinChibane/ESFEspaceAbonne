<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4f72b6fedc3bf9f7bffd47ffeb9b76c3c45401380da9c2b0bd93ad0c5462fc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4721d22ec820bea629685636679e981a682ae1f305fa9b4fb8059f603b411ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4721d22ec820bea629685636679e981a682ae1f305fa9b4fb8059f603b411ae->enter($__internal_f4721d22ec820bea629685636679e981a682ae1f305fa9b4fb8059f603b411ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_c14452038c23f060c464e18b79a1bc208bfabec442932cbb61c56a898cd5739c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14452038c23f060c464e18b79a1bc208bfabec442932cbb61c56a898cd5739c->enter($__internal_c14452038c23f060c464e18b79a1bc208bfabec442932cbb61c56a898cd5739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4721d22ec820bea629685636679e981a682ae1f305fa9b4fb8059f603b411ae->leave($__internal_f4721d22ec820bea629685636679e981a682ae1f305fa9b4fb8059f603b411ae_prof);

        
        $__internal_c14452038c23f060c464e18b79a1bc208bfabec442932cbb61c56a898cd5739c->leave($__internal_c14452038c23f060c464e18b79a1bc208bfabec442932cbb61c56a898cd5739c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c215cf27ef692e5106bdab92f11639f85b869deb00c093c1943c199dd3ec965f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c215cf27ef692e5106bdab92f11639f85b869deb00c093c1943c199dd3ec965f->enter($__internal_c215cf27ef692e5106bdab92f11639f85b869deb00c093c1943c199dd3ec965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2f69fc331790ec8fbd6f2e74acca9f9be22bd2ecc628554ce3eaa57563871296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f69fc331790ec8fbd6f2e74acca9f9be22bd2ecc628554ce3eaa57563871296->enter($__internal_2f69fc331790ec8fbd6f2e74acca9f9be22bd2ecc628554ce3eaa57563871296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2f69fc331790ec8fbd6f2e74acca9f9be22bd2ecc628554ce3eaa57563871296->leave($__internal_2f69fc331790ec8fbd6f2e74acca9f9be22bd2ecc628554ce3eaa57563871296_prof);

        
        $__internal_c215cf27ef692e5106bdab92f11639f85b869deb00c093c1943c199dd3ec965f->leave($__internal_c215cf27ef692e5106bdab92f11639f85b869deb00c093c1943c199dd3ec965f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a91afd57b0febc8976a97b93ee9bce32ac96ffb5a113bbf1a50d0b460bbd38ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91afd57b0febc8976a97b93ee9bce32ac96ffb5a113bbf1a50d0b460bbd38ca->enter($__internal_a91afd57b0febc8976a97b93ee9bce32ac96ffb5a113bbf1a50d0b460bbd38ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1db4e0444cd9f074c74ca081c2c1295e47e26dace63b3942002c141b9ee32ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db4e0444cd9f074c74ca081c2c1295e47e26dace63b3942002c141b9ee32ed3->enter($__internal_1db4e0444cd9f074c74ca081c2c1295e47e26dace63b3942002c141b9ee32ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1db4e0444cd9f074c74ca081c2c1295e47e26dace63b3942002c141b9ee32ed3->leave($__internal_1db4e0444cd9f074c74ca081c2c1295e47e26dace63b3942002c141b9ee32ed3_prof);

        
        $__internal_a91afd57b0febc8976a97b93ee9bce32ac96ffb5a113bbf1a50d0b460bbd38ca->leave($__internal_a91afd57b0febc8976a97b93ee9bce32ac96ffb5a113bbf1a50d0b460bbd38ca_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f45f0691257dee967b7d79398d89454a134a2ab420af093c62f8a49277399af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45f0691257dee967b7d79398d89454a134a2ab420af093c62f8a49277399af9->enter($__internal_f45f0691257dee967b7d79398d89454a134a2ab420af093c62f8a49277399af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_65c35c63b3e706e6ac88a07b12f6e02881cd56a88dd4976bb44f5e1c982bb375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c35c63b3e706e6ac88a07b12f6e02881cd56a88dd4976bb44f5e1c982bb375->enter($__internal_65c35c63b3e706e6ac88a07b12f6e02881cd56a88dd4976bb44f5e1c982bb375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_65c35c63b3e706e6ac88a07b12f6e02881cd56a88dd4976bb44f5e1c982bb375->leave($__internal_65c35c63b3e706e6ac88a07b12f6e02881cd56a88dd4976bb44f5e1c982bb375_prof);

        
        $__internal_f45f0691257dee967b7d79398d89454a134a2ab420af093c62f8a49277399af9->leave($__internal_f45f0691257dee967b7d79398d89454a134a2ab420af093c62f8a49277399af9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
