<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9eb7b8fd9e2c07e3882b21b47f9eca86a1687d5e8a259200b7213b7dd114242d extends Twig_Template
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
        $__internal_a12cb28a932d5ff9b174bd27d30f56e1a06b2120aec23cea9e67f550c959018e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12cb28a932d5ff9b174bd27d30f56e1a06b2120aec23cea9e67f550c959018e->enter($__internal_a12cb28a932d5ff9b174bd27d30f56e1a06b2120aec23cea9e67f550c959018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_95a9b440d5e4d01bd1428e939d9641151428aee00f6214b95c1804e4a354f240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a9b440d5e4d01bd1428e939d9641151428aee00f6214b95c1804e4a354f240->enter($__internal_95a9b440d5e4d01bd1428e939d9641151428aee00f6214b95c1804e4a354f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a12cb28a932d5ff9b174bd27d30f56e1a06b2120aec23cea9e67f550c959018e->leave($__internal_a12cb28a932d5ff9b174bd27d30f56e1a06b2120aec23cea9e67f550c959018e_prof);

        
        $__internal_95a9b440d5e4d01bd1428e939d9641151428aee00f6214b95c1804e4a354f240->leave($__internal_95a9b440d5e4d01bd1428e939d9641151428aee00f6214b95c1804e4a354f240_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0373e5d7db0f36de5047a24f6ba3d7aca0048c0d9229060b11936dbe18533f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0373e5d7db0f36de5047a24f6ba3d7aca0048c0d9229060b11936dbe18533f3c->enter($__internal_0373e5d7db0f36de5047a24f6ba3d7aca0048c0d9229060b11936dbe18533f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9b316220589a4e15d2cc5ee8ab34fcab339551fbe4de40f5f297146e3f64068b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b316220589a4e15d2cc5ee8ab34fcab339551fbe4de40f5f297146e3f64068b->enter($__internal_9b316220589a4e15d2cc5ee8ab34fcab339551fbe4de40f5f297146e3f64068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9b316220589a4e15d2cc5ee8ab34fcab339551fbe4de40f5f297146e3f64068b->leave($__internal_9b316220589a4e15d2cc5ee8ab34fcab339551fbe4de40f5f297146e3f64068b_prof);

        
        $__internal_0373e5d7db0f36de5047a24f6ba3d7aca0048c0d9229060b11936dbe18533f3c->leave($__internal_0373e5d7db0f36de5047a24f6ba3d7aca0048c0d9229060b11936dbe18533f3c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4db2e293b5d94a24ab77e907023e7002f720d9a8b41b3cdd58ed163c51020168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db2e293b5d94a24ab77e907023e7002f720d9a8b41b3cdd58ed163c51020168->enter($__internal_4db2e293b5d94a24ab77e907023e7002f720d9a8b41b3cdd58ed163c51020168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dda0a6dfee519cdfbc94e3ea13ce46b61c30b5a155d6a1a5fd725304812c0cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda0a6dfee519cdfbc94e3ea13ce46b61c30b5a155d6a1a5fd725304812c0cad->enter($__internal_dda0a6dfee519cdfbc94e3ea13ce46b61c30b5a155d6a1a5fd725304812c0cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dda0a6dfee519cdfbc94e3ea13ce46b61c30b5a155d6a1a5fd725304812c0cad->leave($__internal_dda0a6dfee519cdfbc94e3ea13ce46b61c30b5a155d6a1a5fd725304812c0cad_prof);

        
        $__internal_4db2e293b5d94a24ab77e907023e7002f720d9a8b41b3cdd58ed163c51020168->leave($__internal_4db2e293b5d94a24ab77e907023e7002f720d9a8b41b3cdd58ed163c51020168_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2098d69457355db1206b438f79680d937bba6331afb1f93785bb877530cfd1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2098d69457355db1206b438f79680d937bba6331afb1f93785bb877530cfd1cb->enter($__internal_2098d69457355db1206b438f79680d937bba6331afb1f93785bb877530cfd1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bfbf25c5d054a65f29c7044bd1462892012942e1638cbb9c9f18a382f63a8496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbf25c5d054a65f29c7044bd1462892012942e1638cbb9c9f18a382f63a8496->enter($__internal_bfbf25c5d054a65f29c7044bd1462892012942e1638cbb9c9f18a382f63a8496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bfbf25c5d054a65f29c7044bd1462892012942e1638cbb9c9f18a382f63a8496->leave($__internal_bfbf25c5d054a65f29c7044bd1462892012942e1638cbb9c9f18a382f63a8496_prof);

        
        $__internal_2098d69457355db1206b438f79680d937bba6331afb1f93785bb877530cfd1cb->leave($__internal_2098d69457355db1206b438f79680d937bba6331afb1f93785bb877530cfd1cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
