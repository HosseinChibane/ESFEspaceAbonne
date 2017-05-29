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
        $__internal_480f929baa907b71a978c6a6a163adc9e8f828aacd86d791757cde9fdb8b832b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480f929baa907b71a978c6a6a163adc9e8f828aacd86d791757cde9fdb8b832b->enter($__internal_480f929baa907b71a978c6a6a163adc9e8f828aacd86d791757cde9fdb8b832b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $__internal_f89541970d0f4852d5c2b6ed51eb1251cfdd7341037247019471a6ff96b8d582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89541970d0f4852d5c2b6ed51eb1251cfdd7341037247019471a6ff96b8d582->enter($__internal_f89541970d0f4852d5c2b6ed51eb1251cfdd7341037247019471a6ff96b8d582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480f929baa907b71a978c6a6a163adc9e8f828aacd86d791757cde9fdb8b832b->leave($__internal_480f929baa907b71a978c6a6a163adc9e8f828aacd86d791757cde9fdb8b832b_prof);

        
        $__internal_f89541970d0f4852d5c2b6ed51eb1251cfdd7341037247019471a6ff96b8d582->leave($__internal_f89541970d0f4852d5c2b6ed51eb1251cfdd7341037247019471a6ff96b8d582_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_643ee208560604d8a2f468aaa2792b6a1fd8bdceb2866e26935d363dd7d08af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643ee208560604d8a2f468aaa2792b6a1fd8bdceb2866e26935d363dd7d08af1->enter($__internal_643ee208560604d8a2f468aaa2792b6a1fd8bdceb2866e26935d363dd7d08af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b045fdb8791672248bf1c6ea13bc8b9c2f59def9a021ce48a3cc24a875c4856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b045fdb8791672248bf1c6ea13bc8b9c2f59def9a021ce48a3cc24a875c4856->enter($__internal_9b045fdb8791672248bf1c6ea13bc8b9c2f59def9a021ce48a3cc24a875c4856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b045fdb8791672248bf1c6ea13bc8b9c2f59def9a021ce48a3cc24a875c4856->leave($__internal_9b045fdb8791672248bf1c6ea13bc8b9c2f59def9a021ce48a3cc24a875c4856_prof);

        
        $__internal_643ee208560604d8a2f468aaa2792b6a1fd8bdceb2866e26935d363dd7d08af1->leave($__internal_643ee208560604d8a2f468aaa2792b6a1fd8bdceb2866e26935d363dd7d08af1_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_865298e343595acfdc2f13f2318805278f9f97be806ce23028867f12cad89acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865298e343595acfdc2f13f2318805278f9f97be806ce23028867f12cad89acd->enter($__internal_865298e343595acfdc2f13f2318805278f9f97be806ce23028867f12cad89acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_09af9f8302e29340e434828ea87c3d1f63ff99d62de16161a1121512076f8367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09af9f8302e29340e434828ea87c3d1f63ff99d62de16161a1121512076f8367->enter($__internal_09af9f8302e29340e434828ea87c3d1f63ff99d62de16161a1121512076f8367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_09af9f8302e29340e434828ea87c3d1f63ff99d62de16161a1121512076f8367->leave($__internal_09af9f8302e29340e434828ea87c3d1f63ff99d62de16161a1121512076f8367_prof);

        
        $__internal_865298e343595acfdc2f13f2318805278f9f97be806ce23028867f12cad89acd->leave($__internal_865298e343595acfdc2f13f2318805278f9f97be806ce23028867f12cad89acd_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1351fba721c0e8a486784941cab6aea29f9208b977b0db38eeeb4de0ba121a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1351fba721c0e8a486784941cab6aea29f9208b977b0db38eeeb4de0ba121a99->enter($__internal_1351fba721c0e8a486784941cab6aea29f9208b977b0db38eeeb4de0ba121a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e05ad9bf2ddbd72a45a8d36f9cc0b87d6f7fc7f359e39d5c6a27ea8b6413a132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ad9bf2ddbd72a45a8d36f9cc0b87d6f7fc7f359e39d5c6a27ea8b6413a132->enter($__internal_e05ad9bf2ddbd72a45a8d36f9cc0b87d6f7fc7f359e39d5c6a27ea8b6413a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e05ad9bf2ddbd72a45a8d36f9cc0b87d6f7fc7f359e39d5c6a27ea8b6413a132->leave($__internal_e05ad9bf2ddbd72a45a8d36f9cc0b87d6f7fc7f359e39d5c6a27ea8b6413a132_prof);

        
        $__internal_1351fba721c0e8a486784941cab6aea29f9208b977b0db38eeeb4de0ba121a99->leave($__internal_1351fba721c0e8a486784941cab6aea29f9208b977b0db38eeeb4de0ba121a99_prof);

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
