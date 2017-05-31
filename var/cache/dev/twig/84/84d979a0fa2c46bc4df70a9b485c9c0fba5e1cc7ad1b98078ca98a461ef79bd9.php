<?php

/* ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig */
class __TwigTemplate_9876ce046ae005dd6703e8df7c0f454924ff8431596c9a3ea530303e5ca2f475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0d7d1a4b4652327c0d2356758c3a941fa356bf64d699eb1a0c24a1eeef46bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d7d1a4b4652327c0d2356758c3a941fa356bf64d699eb1a0c24a1eeef46bf6->enter($__internal_e0d7d1a4b4652327c0d2356758c3a941fa356bf64d699eb1a0c24a1eeef46bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $__internal_b38052ff71bb949db8f766a1baf6d260db6ed16ff9b0cd217cb4a10bf2c67182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38052ff71bb949db8f766a1baf6d260db6ed16ff9b0cd217cb4a10bf2c67182->enter($__internal_b38052ff71bb949db8f766a1baf6d260db6ed16ff9b0cd217cb4a10bf2c67182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d7d1a4b4652327c0d2356758c3a941fa356bf64d699eb1a0c24a1eeef46bf6->leave($__internal_e0d7d1a4b4652327c0d2356758c3a941fa356bf64d699eb1a0c24a1eeef46bf6_prof);

        
        $__internal_b38052ff71bb949db8f766a1baf6d260db6ed16ff9b0cd217cb4a10bf2c67182->leave($__internal_b38052ff71bb949db8f766a1baf6d260db6ed16ff9b0cd217cb4a10bf2c67182_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e6b0b693a5a728c677ba06af8b9f4e51857249a73ae6ac9a1047813e60783fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6b0b693a5a728c677ba06af8b9f4e51857249a73ae6ac9a1047813e60783fb->enter($__internal_1e6b0b693a5a728c677ba06af8b9f4e51857249a73ae6ac9a1047813e60783fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79322eb70bc12e99badc9c8106db13177ef54f284aeed70bdb314eefdec21d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79322eb70bc12e99badc9c8106db13177ef54f284aeed70bdb314eefdec21d2c->enter($__internal_79322eb70bc12e99badc9c8106db13177ef54f284aeed70bdb314eefdec21d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_79322eb70bc12e99badc9c8106db13177ef54f284aeed70bdb314eefdec21d2c->leave($__internal_79322eb70bc12e99badc9c8106db13177ef54f284aeed70bdb314eefdec21d2c_prof);

        
        $__internal_1e6b0b693a5a728c677ba06af8b9f4e51857249a73ae6ac9a1047813e60783fb->leave($__internal_1e6b0b693a5a728c677ba06af8b9f4e51857249a73ae6ac9a1047813e60783fb_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_156599f63ce984bd74dfa0bac924364fbe3b73ea9651a39059ae9b67b0cfc619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156599f63ce984bd74dfa0bac924364fbe3b73ea9651a39059ae9b67b0cfc619->enter($__internal_156599f63ce984bd74dfa0bac924364fbe3b73ea9651a39059ae9b67b0cfc619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0ed184f8e9059a32ce810244982e3fdbf22083d3dccd156de5564663597423ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed184f8e9059a32ce810244982e3fdbf22083d3dccd156de5564663597423ec->enter($__internal_0ed184f8e9059a32ce810244982e3fdbf22083d3dccd156de5564663597423ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_0ed184f8e9059a32ce810244982e3fdbf22083d3dccd156de5564663597423ec->leave($__internal_0ed184f8e9059a32ce810244982e3fdbf22083d3dccd156de5564663597423ec_prof);

        
        $__internal_156599f63ce984bd74dfa0bac924364fbe3b73ea9651a39059ae9b67b0cfc619->leave($__internal_156599f63ce984bd74dfa0bac924364fbe3b73ea9651a39059ae9b67b0cfc619_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b88d243facd707f7676a28c7631b8fc3a172c8f3f050e233f148998b5d5e45ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88d243facd707f7676a28c7631b8fc3a172c8f3f050e233f148998b5d5e45ce->enter($__internal_b88d243facd707f7676a28c7631b8fc3a172c8f3f050e233f148998b5d5e45ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e364b7dfe16b0b7f4c68473120d71e1312a4aeccf2b2628d35f0d2cc120e2cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e364b7dfe16b0b7f4c68473120d71e1312a4aeccf2b2628d35f0d2cc120e2cbc->enter($__internal_e364b7dfe16b0b7f4c68473120d71e1312a4aeccf2b2628d35f0d2cc120e2cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_e364b7dfe16b0b7f4c68473120d71e1312a4aeccf2b2628d35f0d2cc120e2cbc->leave($__internal_e364b7dfe16b0b7f4c68473120d71e1312a4aeccf2b2628d35f0d2cc120e2cbc_prof);

        
        $__internal_b88d243facd707f7676a28c7631b8fc3a172c8f3f050e233f148998b5d5e45ce->leave($__internal_b88d243facd707f7676a28c7631b8fc3a172c8f3f050e233f148998b5d5e45ce_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 


<!-- Mes Parametres -->
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMAIL.html.twig");
    }
}
