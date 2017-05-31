<?php

/* @ESFEspaceAbonne/back/mesParametres.html.twig */
class __TwigTemplate_68204178aa916c7c4f523107aaebadccfb1650d0ccd31d2f6499373d0fa93fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fe2e73689dfe95e662113788bd8f0448229e5115460af6e4b9a9d8848aaea07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe2e73689dfe95e662113788bd8f0448229e5115460af6e4b9a9d8848aaea07->enter($__internal_7fe2e73689dfe95e662113788bd8f0448229e5115460af6e4b9a9d8848aaea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $__internal_3c5db9c0477ad54b622360f36e8045e881cb5da4b63d724cef20d6108ec3590a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5db9c0477ad54b622360f36e8045e881cb5da4b63d724cef20d6108ec3590a->enter($__internal_3c5db9c0477ad54b622360f36e8045e881cb5da4b63d724cef20d6108ec3590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe2e73689dfe95e662113788bd8f0448229e5115460af6e4b9a9d8848aaea07->leave($__internal_7fe2e73689dfe95e662113788bd8f0448229e5115460af6e4b9a9d8848aaea07_prof);

        
        $__internal_3c5db9c0477ad54b622360f36e8045e881cb5da4b63d724cef20d6108ec3590a->leave($__internal_3c5db9c0477ad54b622360f36e8045e881cb5da4b63d724cef20d6108ec3590a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf8b3a34c8cdd8f5d614dd14e2dbc899025ab1c56c7ffc99e5a4840cd30b509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf8b3a34c8cdd8f5d614dd14e2dbc899025ab1c56c7ffc99e5a4840cd30b509->enter($__internal_7cf8b3a34c8cdd8f5d614dd14e2dbc899025ab1c56c7ffc99e5a4840cd30b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f47a3ffba2ce25c98067e9c453fc93bf80d2fd36036841de637980397c0d1f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47a3ffba2ce25c98067e9c453fc93bf80d2fd36036841de637980397c0d1f3b->enter($__internal_f47a3ffba2ce25c98067e9c453fc93bf80d2fd36036841de637980397c0d1f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f47a3ffba2ce25c98067e9c453fc93bf80d2fd36036841de637980397c0d1f3b->leave($__internal_f47a3ffba2ce25c98067e9c453fc93bf80d2fd36036841de637980397c0d1f3b_prof);

        
        $__internal_7cf8b3a34c8cdd8f5d614dd14e2dbc899025ab1c56c7ffc99e5a4840cd30b509->leave($__internal_7cf8b3a34c8cdd8f5d614dd14e2dbc899025ab1c56c7ffc99e5a4840cd30b509_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_cd7061f3209ffb8bad5c9d25c466d360e019ee71ba1f8cb985af3169c81aa263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7061f3209ffb8bad5c9d25c466d360e019ee71ba1f8cb985af3169c81aa263->enter($__internal_cd7061f3209ffb8bad5c9d25c466d360e019ee71ba1f8cb985af3169c81aa263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_abd92a5bce0fee969c2474a997c22c060cf2bf0282ef392ca278923fd3a610ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd92a5bce0fee969c2474a997c22c060cf2bf0282ef392ca278923fd3a610ff->enter($__internal_abd92a5bce0fee969c2474a997c22c060cf2bf0282ef392ca278923fd3a610ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_abd92a5bce0fee969c2474a997c22c060cf2bf0282ef392ca278923fd3a610ff->leave($__internal_abd92a5bce0fee969c2474a997c22c060cf2bf0282ef392ca278923fd3a610ff_prof);

        
        $__internal_cd7061f3209ffb8bad5c9d25c466d360e019ee71ba1f8cb985af3169c81aa263->leave($__internal_cd7061f3209ffb8bad5c9d25c466d360e019ee71ba1f8cb985af3169c81aa263_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block Content %} 
  <!-- Mes Parametres -->
  {{ form_start(form) }}
  
  {% if not form.vars.valid %}
    <div class=\"alert alert-error\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "@ESFEspaceAbonne/back/mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametres.html.twig");
    }
}
