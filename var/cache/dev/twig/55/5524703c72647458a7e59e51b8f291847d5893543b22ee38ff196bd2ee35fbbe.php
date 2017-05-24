<?php

/* ESFEspaceAbonneBundle:Default:mesParametres.html.twig */
class __TwigTemplate_c2fd80a4116e30ff2e27fb0a7b8da7a9cad70264932cff8d97e22eb7e3b63545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesParametres.html.twig", 1);
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
        $__internal_d89d984af75966e335ad5e28d7b2817bdd6999fb68f91be02d318710cc7f174d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89d984af75966e335ad5e28d7b2817bdd6999fb68f91be02d318710cc7f174d->enter($__internal_d89d984af75966e335ad5e28d7b2817bdd6999fb68f91be02d318710cc7f174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametres.html.twig"));

        $__internal_3edfa45d12241bdafde73c10465738b305804b23f16f65a9f75a3ac41882da00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edfa45d12241bdafde73c10465738b305804b23f16f65a9f75a3ac41882da00->enter($__internal_3edfa45d12241bdafde73c10465738b305804b23f16f65a9f75a3ac41882da00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89d984af75966e335ad5e28d7b2817bdd6999fb68f91be02d318710cc7f174d->leave($__internal_d89d984af75966e335ad5e28d7b2817bdd6999fb68f91be02d318710cc7f174d_prof);

        
        $__internal_3edfa45d12241bdafde73c10465738b305804b23f16f65a9f75a3ac41882da00->leave($__internal_3edfa45d12241bdafde73c10465738b305804b23f16f65a9f75a3ac41882da00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f992ca505b212b617af77284d5fc6189496efd6605c3952ff1d40786d0c11764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f992ca505b212b617af77284d5fc6189496efd6605c3952ff1d40786d0c11764->enter($__internal_f992ca505b212b617af77284d5fc6189496efd6605c3952ff1d40786d0c11764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cbf58947e40b3a1da02b3c532066fc81eae0a5a636d166caee11fde990031ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbf58947e40b3a1da02b3c532066fc81eae0a5a636d166caee11fde990031ea->enter($__internal_1cbf58947e40b3a1da02b3c532066fc81eae0a5a636d166caee11fde990031ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1cbf58947e40b3a1da02b3c532066fc81eae0a5a636d166caee11fde990031ea->leave($__internal_1cbf58947e40b3a1da02b3c532066fc81eae0a5a636d166caee11fde990031ea_prof);

        
        $__internal_f992ca505b212b617af77284d5fc6189496efd6605c3952ff1d40786d0c11764->leave($__internal_f992ca505b212b617af77284d5fc6189496efd6605c3952ff1d40786d0c11764_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e69390e509a37a5c64ef28061dd80e5f1c7493d086a36928b18bdb21d5f9425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69390e509a37a5c64ef28061dd80e5f1c7493d086a36928b18bdb21d5f9425d->enter($__internal_e69390e509a37a5c64ef28061dd80e5f1c7493d086a36928b18bdb21d5f9425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8122ed5518367588f5e9db25b4080aff218ffd1395ccda7d931a5655dd48fc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8122ed5518367588f5e9db25b4080aff218ffd1395ccda7d931a5655dd48fc08->enter($__internal_8122ed5518367588f5e9db25b4080aff218ffd1395ccda7d931a5655dd48fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_8122ed5518367588f5e9db25b4080aff218ffd1395ccda7d931a5655dd48fc08->leave($__internal_8122ed5518367588f5e9db25b4080aff218ffd1395ccda7d931a5655dd48fc08_prof);

        
        $__internal_e69390e509a37a5c64ef28061dd80e5f1c7493d086a36928b18bdb21d5f9425d->leave($__internal_e69390e509a37a5c64ef28061dd80e5f1c7493d086a36928b18bdb21d5f9425d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesParametres.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesParametres.html.twig");
    }
}
