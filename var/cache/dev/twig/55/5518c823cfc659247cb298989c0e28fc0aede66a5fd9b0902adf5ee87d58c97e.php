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
        $__internal_82713786db8815a4d75a85cf9c0e271a436bb85e108571b161ae4acc0ffbf986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82713786db8815a4d75a85cf9c0e271a436bb85e108571b161ae4acc0ffbf986->enter($__internal_82713786db8815a4d75a85cf9c0e271a436bb85e108571b161ae4acc0ffbf986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2393468b1780ef58b618a2def9279be45c9776fc68a0392169e677b81321e283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2393468b1780ef58b618a2def9279be45c9776fc68a0392169e677b81321e283->enter($__internal_2393468b1780ef58b618a2def9279be45c9776fc68a0392169e677b81321e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_82713786db8815a4d75a85cf9c0e271a436bb85e108571b161ae4acc0ffbf986->leave($__internal_82713786db8815a4d75a85cf9c0e271a436bb85e108571b161ae4acc0ffbf986_prof);

        
        $__internal_2393468b1780ef58b618a2def9279be45c9776fc68a0392169e677b81321e283->leave($__internal_2393468b1780ef58b618a2def9279be45c9776fc68a0392169e677b81321e283_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d0c350230572b7f9211cbb82e63e4340acd948bddb7729c664965976641b6608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c350230572b7f9211cbb82e63e4340acd948bddb7729c664965976641b6608->enter($__internal_d0c350230572b7f9211cbb82e63e4340acd948bddb7729c664965976641b6608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_76fb35379911867058cf7cf48c54a6a1b7a37e2e2d271f6cc12bc89e3a883071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fb35379911867058cf7cf48c54a6a1b7a37e2e2d271f6cc12bc89e3a883071->enter($__internal_76fb35379911867058cf7cf48c54a6a1b7a37e2e2d271f6cc12bc89e3a883071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_76fb35379911867058cf7cf48c54a6a1b7a37e2e2d271f6cc12bc89e3a883071->leave($__internal_76fb35379911867058cf7cf48c54a6a1b7a37e2e2d271f6cc12bc89e3a883071_prof);

        
        $__internal_d0c350230572b7f9211cbb82e63e4340acd948bddb7729c664965976641b6608->leave($__internal_d0c350230572b7f9211cbb82e63e4340acd948bddb7729c664965976641b6608_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32eec8018f65c2b3a3636a87987914ce04545f4b76787af08a3aa8cb0e461f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eec8018f65c2b3a3636a87987914ce04545f4b76787af08a3aa8cb0e461f7d->enter($__internal_32eec8018f65c2b3a3636a87987914ce04545f4b76787af08a3aa8cb0e461f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7f56b6cb79b20fda4422387e10c436700fed74bd756921a30414f03494dbf317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f56b6cb79b20fda4422387e10c436700fed74bd756921a30414f03494dbf317->enter($__internal_7f56b6cb79b20fda4422387e10c436700fed74bd756921a30414f03494dbf317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f56b6cb79b20fda4422387e10c436700fed74bd756921a30414f03494dbf317->leave($__internal_7f56b6cb79b20fda4422387e10c436700fed74bd756921a30414f03494dbf317_prof);

        
        $__internal_32eec8018f65c2b3a3636a87987914ce04545f4b76787af08a3aa8cb0e461f7d->leave($__internal_32eec8018f65c2b3a3636a87987914ce04545f4b76787af08a3aa8cb0e461f7d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2a5d5075f4f66910abf448ec033a21bad6f2f20c476616287f163987dfa4b60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5d5075f4f66910abf448ec033a21bad6f2f20c476616287f163987dfa4b60c->enter($__internal_2a5d5075f4f66910abf448ec033a21bad6f2f20c476616287f163987dfa4b60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_15fc131e5ee14f2c99402cb7f780972c764253e1f7e96adf04d394790fd486e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fc131e5ee14f2c99402cb7f780972c764253e1f7e96adf04d394790fd486e9->enter($__internal_15fc131e5ee14f2c99402cb7f780972c764253e1f7e96adf04d394790fd486e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_15fc131e5ee14f2c99402cb7f780972c764253e1f7e96adf04d394790fd486e9->leave($__internal_15fc131e5ee14f2c99402cb7f780972c764253e1f7e96adf04d394790fd486e9_prof);

        
        $__internal_2a5d5075f4f66910abf448ec033a21bad6f2f20c476616287f163987dfa4b60c->leave($__internal_2a5d5075f4f66910abf448ec033a21bad6f2f20c476616287f163987dfa4b60c_prof);

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
