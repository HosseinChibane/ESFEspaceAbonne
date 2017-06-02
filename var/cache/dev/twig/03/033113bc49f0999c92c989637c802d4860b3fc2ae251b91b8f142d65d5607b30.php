<?php

/* ESFEspaceAbonneBundle:back:mesParametres.html.twig */
class __TwigTemplate_93e879d1f011c414128e2310be2885d59b7695cc9e8f10f18b3fefcd9e4034c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", 1);
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
        $__internal_5fb2970297397454566bf0aa1b453ddd9c8c01767557a27355a391c378c1f0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb2970297397454566bf0aa1b453ddd9c8c01767557a27355a391c378c1f0fc->enter($__internal_5fb2970297397454566bf0aa1b453ddd9c8c01767557a27355a391c378c1f0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $__internal_4d5cc081fe3a425903e8a579d98b39737e519884daaea77bffdc3a6cfb27194f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5cc081fe3a425903e8a579d98b39737e519884daaea77bffdc3a6cfb27194f->enter($__internal_4d5cc081fe3a425903e8a579d98b39737e519884daaea77bffdc3a6cfb27194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb2970297397454566bf0aa1b453ddd9c8c01767557a27355a391c378c1f0fc->leave($__internal_5fb2970297397454566bf0aa1b453ddd9c8c01767557a27355a391c378c1f0fc_prof);

        
        $__internal_4d5cc081fe3a425903e8a579d98b39737e519884daaea77bffdc3a6cfb27194f->leave($__internal_4d5cc081fe3a425903e8a579d98b39737e519884daaea77bffdc3a6cfb27194f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92ebbe3987e003108acf9fa87fe735cd2d074c9f7b28319d17d6779dc52a235d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ebbe3987e003108acf9fa87fe735cd2d074c9f7b28319d17d6779dc52a235d->enter($__internal_92ebbe3987e003108acf9fa87fe735cd2d074c9f7b28319d17d6779dc52a235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd77ea973ba73dc4ca2a6007b68f98329a0fa36fd4361d4388ee9ca355628e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd77ea973ba73dc4ca2a6007b68f98329a0fa36fd4361d4388ee9ca355628e12->enter($__internal_bd77ea973ba73dc4ca2a6007b68f98329a0fa36fd4361d4388ee9ca355628e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd77ea973ba73dc4ca2a6007b68f98329a0fa36fd4361d4388ee9ca355628e12->leave($__internal_bd77ea973ba73dc4ca2a6007b68f98329a0fa36fd4361d4388ee9ca355628e12_prof);

        
        $__internal_92ebbe3987e003108acf9fa87fe735cd2d074c9f7b28319d17d6779dc52a235d->leave($__internal_92ebbe3987e003108acf9fa87fe735cd2d074c9f7b28319d17d6779dc52a235d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1d9c1054cd7a8c8c9c84ad2bc5e52ef8c32e5151fae427b5ce8f16579b877a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9c1054cd7a8c8c9c84ad2bc5e52ef8c32e5151fae427b5ce8f16579b877a02->enter($__internal_1d9c1054cd7a8c8c9c84ad2bc5e52ef8c32e5151fae427b5ce8f16579b877a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_95df87331ca9c974ac5339320eb535ff33779cacf0f97cb343fef1343ef525a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95df87331ca9c974ac5339320eb535ff33779cacf0f97cb343fef1343ef525a8->enter($__internal_95df87331ca9c974ac5339320eb535ff33779cacf0f97cb343fef1343ef525a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_95df87331ca9c974ac5339320eb535ff33779cacf0f97cb343fef1343ef525a8->leave($__internal_95df87331ca9c974ac5339320eb535ff33779cacf0f97cb343fef1343ef525a8_prof);

        
        $__internal_1d9c1054cd7a8c8c9c84ad2bc5e52ef8c32e5151fae427b5ce8f16579b877a02->leave($__internal_1d9c1054cd7a8c8c9c84ad2bc5e52ef8c32e5151fae427b5ce8f16579b877a02_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametres.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametres.html.twig");
    }
}
