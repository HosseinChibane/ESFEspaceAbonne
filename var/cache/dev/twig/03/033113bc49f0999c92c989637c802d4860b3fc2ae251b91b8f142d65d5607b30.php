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
        $__internal_2efc0c3a05f882139c5306b287a667a875121938fde58392a937779135a79d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efc0c3a05f882139c5306b287a667a875121938fde58392a937779135a79d78->enter($__internal_2efc0c3a05f882139c5306b287a667a875121938fde58392a937779135a79d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $__internal_56d0f8cf414cfea954e902ac264cd3bcf2c40df0826b6ff2d5f1fe7ba256a667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d0f8cf414cfea954e902ac264cd3bcf2c40df0826b6ff2d5f1fe7ba256a667->enter($__internal_56d0f8cf414cfea954e902ac264cd3bcf2c40df0826b6ff2d5f1fe7ba256a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2efc0c3a05f882139c5306b287a667a875121938fde58392a937779135a79d78->leave($__internal_2efc0c3a05f882139c5306b287a667a875121938fde58392a937779135a79d78_prof);

        
        $__internal_56d0f8cf414cfea954e902ac264cd3bcf2c40df0826b6ff2d5f1fe7ba256a667->leave($__internal_56d0f8cf414cfea954e902ac264cd3bcf2c40df0826b6ff2d5f1fe7ba256a667_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c57e13ffb72666423e73b8a3feea68cf0ee9f19085123c6586833666600fd4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57e13ffb72666423e73b8a3feea68cf0ee9f19085123c6586833666600fd4ce->enter($__internal_c57e13ffb72666423e73b8a3feea68cf0ee9f19085123c6586833666600fd4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7ed851b47d8a09b76390b9a412a4a57cdb7e66ad915785bb750092acfe42082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ed851b47d8a09b76390b9a412a4a57cdb7e66ad915785bb750092acfe42082->enter($__internal_e7ed851b47d8a09b76390b9a412a4a57cdb7e66ad915785bb750092acfe42082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e7ed851b47d8a09b76390b9a412a4a57cdb7e66ad915785bb750092acfe42082->leave($__internal_e7ed851b47d8a09b76390b9a412a4a57cdb7e66ad915785bb750092acfe42082_prof);

        
        $__internal_c57e13ffb72666423e73b8a3feea68cf0ee9f19085123c6586833666600fd4ce->leave($__internal_c57e13ffb72666423e73b8a3feea68cf0ee9f19085123c6586833666600fd4ce_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e56dfcc672a41979172448474f593f2c6e0d796ca30252a4c3cfb9da32404708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56dfcc672a41979172448474f593f2c6e0d796ca30252a4c3cfb9da32404708->enter($__internal_e56dfcc672a41979172448474f593f2c6e0d796ca30252a4c3cfb9da32404708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d34fde513e87ae45258d350774dcfc934b0492d6a8093b4038e3e751e46f3710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34fde513e87ae45258d350774dcfc934b0492d6a8093b4038e3e751e46f3710->enter($__internal_d34fde513e87ae45258d350774dcfc934b0492d6a8093b4038e3e751e46f3710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d34fde513e87ae45258d350774dcfc934b0492d6a8093b4038e3e751e46f3710->leave($__internal_d34fde513e87ae45258d350774dcfc934b0492d6a8093b4038e3e751e46f3710_prof);

        
        $__internal_e56dfcc672a41979172448474f593f2c6e0d796ca30252a4c3cfb9da32404708->leave($__internal_e56dfcc672a41979172448474f593f2c6e0d796ca30252a4c3cfb9da32404708_prof);

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
