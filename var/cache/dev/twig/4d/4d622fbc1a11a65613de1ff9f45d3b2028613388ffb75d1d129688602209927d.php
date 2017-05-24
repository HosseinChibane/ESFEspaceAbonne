<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_40022a1122f206dfd83d3e17d0dd4337205f81cf04c4b9feb8eda5fb08f4aafa extends Twig_Template
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
        $__internal_a3b4880646232ec4ca1b1744f23f8eb0eef005c2011c1615a5eb318f169e4eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b4880646232ec4ca1b1744f23f8eb0eef005c2011c1615a5eb318f169e4eff->enter($__internal_a3b4880646232ec4ca1b1744f23f8eb0eef005c2011c1615a5eb318f169e4eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_75664820c322a3317fdf05303b505e1c8c4fcd923452f36052f2334b5ee0306b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75664820c322a3317fdf05303b505e1c8c4fcd923452f36052f2334b5ee0306b->enter($__internal_75664820c322a3317fdf05303b505e1c8c4fcd923452f36052f2334b5ee0306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a3b4880646232ec4ca1b1744f23f8eb0eef005c2011c1615a5eb318f169e4eff->leave($__internal_a3b4880646232ec4ca1b1744f23f8eb0eef005c2011c1615a5eb318f169e4eff_prof);

        
        $__internal_75664820c322a3317fdf05303b505e1c8c4fcd923452f36052f2334b5ee0306b->leave($__internal_75664820c322a3317fdf05303b505e1c8c4fcd923452f36052f2334b5ee0306b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c0ad6e917b82a225526db24c44438a9d9f00abc921f348e7fdcae49c2abb314c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ad6e917b82a225526db24c44438a9d9f00abc921f348e7fdcae49c2abb314c->enter($__internal_c0ad6e917b82a225526db24c44438a9d9f00abc921f348e7fdcae49c2abb314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9502d2d32a24817ccf920afddfd15d2665d81a82a2de7302753602baf2016930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9502d2d32a24817ccf920afddfd15d2665d81a82a2de7302753602baf2016930->enter($__internal_9502d2d32a24817ccf920afddfd15d2665d81a82a2de7302753602baf2016930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9502d2d32a24817ccf920afddfd15d2665d81a82a2de7302753602baf2016930->leave($__internal_9502d2d32a24817ccf920afddfd15d2665d81a82a2de7302753602baf2016930_prof);

        
        $__internal_c0ad6e917b82a225526db24c44438a9d9f00abc921f348e7fdcae49c2abb314c->leave($__internal_c0ad6e917b82a225526db24c44438a9d9f00abc921f348e7fdcae49c2abb314c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ed5c61e70e5fe996544e43980b5e3d98765b6609754e76e840364952c7a4847d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5c61e70e5fe996544e43980b5e3d98765b6609754e76e840364952c7a4847d->enter($__internal_ed5c61e70e5fe996544e43980b5e3d98765b6609754e76e840364952c7a4847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_142edb90261b8caf3c16284dd6d78c30c05ea9d77490a8afdf0b288636700450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142edb90261b8caf3c16284dd6d78c30c05ea9d77490a8afdf0b288636700450->enter($__internal_142edb90261b8caf3c16284dd6d78c30c05ea9d77490a8afdf0b288636700450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_142edb90261b8caf3c16284dd6d78c30c05ea9d77490a8afdf0b288636700450->leave($__internal_142edb90261b8caf3c16284dd6d78c30c05ea9d77490a8afdf0b288636700450_prof);

        
        $__internal_ed5c61e70e5fe996544e43980b5e3d98765b6609754e76e840364952c7a4847d->leave($__internal_ed5c61e70e5fe996544e43980b5e3d98765b6609754e76e840364952c7a4847d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e06170dec0b944d2106615a12fc2b5f5021e8c38d6e431f3b56c0c20f8155ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06170dec0b944d2106615a12fc2b5f5021e8c38d6e431f3b56c0c20f8155ae7->enter($__internal_e06170dec0b944d2106615a12fc2b5f5021e8c38d6e431f3b56c0c20f8155ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c6a58d1254eda96c9ebcde3d74fa3d4b723a15dfd63710815569639d7c00a823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a58d1254eda96c9ebcde3d74fa3d4b723a15dfd63710815569639d7c00a823->enter($__internal_c6a58d1254eda96c9ebcde3d74fa3d4b723a15dfd63710815569639d7c00a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6a58d1254eda96c9ebcde3d74fa3d4b723a15dfd63710815569639d7c00a823->leave($__internal_c6a58d1254eda96c9ebcde3d74fa3d4b723a15dfd63710815569639d7c00a823_prof);

        
        $__internal_e06170dec0b944d2106615a12fc2b5f5021e8c38d6e431f3b56c0c20f8155ae7->leave($__internal_e06170dec0b944d2106615a12fc2b5f5021e8c38d6e431f3b56c0c20f8155ae7_prof);

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
