<?php

/* ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig */
class __TwigTemplate_ec575393feb825394f149540619812a62446a0a5eed63bd6a3d9729b4089779a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", 1);
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
        $__internal_bb7c6579cfc5c4231ebccafca9f028803d6c6fbc9fb9dae19963bb3986335b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7c6579cfc5c4231ebccafca9f028803d6c6fbc9fb9dae19963bb3986335b65->enter($__internal_bb7c6579cfc5c4231ebccafca9f028803d6c6fbc9fb9dae19963bb3986335b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $__internal_98b387b401420ac45d54b44b521ff516e2ff2db1e35e54d1b2e9c00f8febea69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b387b401420ac45d54b44b521ff516e2ff2db1e35e54d1b2e9c00f8febea69->enter($__internal_98b387b401420ac45d54b44b521ff516e2ff2db1e35e54d1b2e9c00f8febea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7c6579cfc5c4231ebccafca9f028803d6c6fbc9fb9dae19963bb3986335b65->leave($__internal_bb7c6579cfc5c4231ebccafca9f028803d6c6fbc9fb9dae19963bb3986335b65_prof);

        
        $__internal_98b387b401420ac45d54b44b521ff516e2ff2db1e35e54d1b2e9c00f8febea69->leave($__internal_98b387b401420ac45d54b44b521ff516e2ff2db1e35e54d1b2e9c00f8febea69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f7b4086e7b3416c27421e8956e1546322e6a085afdafb49d0ff440ae2ca495c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7b4086e7b3416c27421e8956e1546322e6a085afdafb49d0ff440ae2ca495c->enter($__internal_4f7b4086e7b3416c27421e8956e1546322e6a085afdafb49d0ff440ae2ca495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09682179997e9e9628fca6ddc5f2013c79fbd68e2abae347d083b0a956aa533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09682179997e9e9628fca6ddc5f2013c79fbd68e2abae347d083b0a956aa533e->enter($__internal_09682179997e9e9628fca6ddc5f2013c79fbd68e2abae347d083b0a956aa533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09682179997e9e9628fca6ddc5f2013c79fbd68e2abae347d083b0a956aa533e->leave($__internal_09682179997e9e9628fca6ddc5f2013c79fbd68e2abae347d083b0a956aa533e_prof);

        
        $__internal_4f7b4086e7b3416c27421e8956e1546322e6a085afdafb49d0ff440ae2ca495c->leave($__internal_4f7b4086e7b3416c27421e8956e1546322e6a085afdafb49d0ff440ae2ca495c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_501ad0bb81a1b6ff30c128b1c4790a4ebd7e6ba790e91d1ce50c2150211616b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501ad0bb81a1b6ff30c128b1c4790a4ebd7e6ba790e91d1ce50c2150211616b8->enter($__internal_501ad0bb81a1b6ff30c128b1c4790a4ebd7e6ba790e91d1ce50c2150211616b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_922b793ef38767878e1feac0f1a69664a5d259a45d66b5228a470180f381cff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922b793ef38767878e1feac0f1a69664a5d259a45d66b5228a470180f381cff1->enter($__internal_922b793ef38767878e1feac0f1a69664a5d259a45d66b5228a470180f381cff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_922b793ef38767878e1feac0f1a69664a5d259a45d66b5228a470180f381cff1->leave($__internal_922b793ef38767878e1feac0f1a69664a5d259a45d66b5228a470180f381cff1_prof);

        
        $__internal_501ad0bb81a1b6ff30c128b1c4790a4ebd7e6ba790e91d1ce50c2150211616b8->leave($__internal_501ad0bb81a1b6ff30c128b1c4790a4ebd7e6ba790e91d1ce50c2150211616b8_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6e9e96af2a5333b9099b8f7079419f86bf9dae811f1f4765355fbafc05f7f922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9e96af2a5333b9099b8f7079419f86bf9dae811f1f4765355fbafc05f7f922->enter($__internal_6e9e96af2a5333b9099b8f7079419f86bf9dae811f1f4765355fbafc05f7f922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9ff7d4b7dda4e076c4524d7e9414b8f2410b0249110ca72320dd627b93baeadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff7d4b7dda4e076c4524d7e9414b8f2410b0249110ca72320dd627b93baeadf->enter($__internal_9ff7d4b7dda4e076c4524d7e9414b8f2410b0249110ca72320dd627b93baeadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
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
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_9ff7d4b7dda4e076c4524d7e9414b8f2410b0249110ca72320dd627b93baeadf->leave($__internal_9ff7d4b7dda4e076c4524d7e9414b8f2410b0249110ca72320dd627b93baeadf_prof);

        
        $__internal_6e9e96af2a5333b9099b8f7079419f86bf9dae811f1f4765355fbafc05f7f922->leave($__internal_6e9e96af2a5333b9099b8f7079419f86bf9dae811f1f4765355fbafc05f7f922_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMDP.html.twig");
    }
}
