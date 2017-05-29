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
        $__internal_75d1b0c055f131d795a40e5fc7f52f75188593ce066afc5e5b5e290941004819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d1b0c055f131d795a40e5fc7f52f75188593ce066afc5e5b5e290941004819->enter($__internal_75d1b0c055f131d795a40e5fc7f52f75188593ce066afc5e5b5e290941004819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $__internal_070d0bc9ed9ba72f276336e8bd547a79419f3489596e93766d7a20c5a3b4313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070d0bc9ed9ba72f276336e8bd547a79419f3489596e93766d7a20c5a3b4313e->enter($__internal_070d0bc9ed9ba72f276336e8bd547a79419f3489596e93766d7a20c5a3b4313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d1b0c055f131d795a40e5fc7f52f75188593ce066afc5e5b5e290941004819->leave($__internal_75d1b0c055f131d795a40e5fc7f52f75188593ce066afc5e5b5e290941004819_prof);

        
        $__internal_070d0bc9ed9ba72f276336e8bd547a79419f3489596e93766d7a20c5a3b4313e->leave($__internal_070d0bc9ed9ba72f276336e8bd547a79419f3489596e93766d7a20c5a3b4313e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6276baea9d4aba90bc77cf28410afedb9aa6c938dc2eadef001b3d1c6a4727cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6276baea9d4aba90bc77cf28410afedb9aa6c938dc2eadef001b3d1c6a4727cd->enter($__internal_6276baea9d4aba90bc77cf28410afedb9aa6c938dc2eadef001b3d1c6a4727cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce788284e6c4cda74eb905ef1339fe14b86cf4f4419517e4d6241458a5fcfd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce788284e6c4cda74eb905ef1339fe14b86cf4f4419517e4d6241458a5fcfd22->enter($__internal_ce788284e6c4cda74eb905ef1339fe14b86cf4f4419517e4d6241458a5fcfd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce788284e6c4cda74eb905ef1339fe14b86cf4f4419517e4d6241458a5fcfd22->leave($__internal_ce788284e6c4cda74eb905ef1339fe14b86cf4f4419517e4d6241458a5fcfd22_prof);

        
        $__internal_6276baea9d4aba90bc77cf28410afedb9aa6c938dc2eadef001b3d1c6a4727cd->leave($__internal_6276baea9d4aba90bc77cf28410afedb9aa6c938dc2eadef001b3d1c6a4727cd_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ce4b218dcaaa78a32c3ffa6907cd48edbeb9c8ee1a4cef02c614fd65735707e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4b218dcaaa78a32c3ffa6907cd48edbeb9c8ee1a4cef02c614fd65735707e0->enter($__internal_ce4b218dcaaa78a32c3ffa6907cd48edbeb9c8ee1a4cef02c614fd65735707e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f2edea0b4502bfbc6e852bbf91d0d6431ac55ce647d22801ec01993b0366a9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2edea0b4502bfbc6e852bbf91d0d6431ac55ce647d22801ec01993b0366a9e8->enter($__internal_f2edea0b4502bfbc6e852bbf91d0d6431ac55ce647d22801ec01993b0366a9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_f2edea0b4502bfbc6e852bbf91d0d6431ac55ce647d22801ec01993b0366a9e8->leave($__internal_f2edea0b4502bfbc6e852bbf91d0d6431ac55ce647d22801ec01993b0366a9e8_prof);

        
        $__internal_ce4b218dcaaa78a32c3ffa6907cd48edbeb9c8ee1a4cef02c614fd65735707e0->leave($__internal_ce4b218dcaaa78a32c3ffa6907cd48edbeb9c8ee1a4cef02c614fd65735707e0_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8a675a7bb67b49327309680ef5ec367c10615daf3b20f3fb4f13df2d4e0650af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a675a7bb67b49327309680ef5ec367c10615daf3b20f3fb4f13df2d4e0650af->enter($__internal_8a675a7bb67b49327309680ef5ec367c10615daf3b20f3fb4f13df2d4e0650af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_98f2b7825a474675f432fff31193913fa4818698dcc434b8c4ab2829f04e629d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f2b7825a474675f432fff31193913fa4818698dcc434b8c4ab2829f04e629d->enter($__internal_98f2b7825a474675f432fff31193913fa4818698dcc434b8c4ab2829f04e629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_98f2b7825a474675f432fff31193913fa4818698dcc434b8c4ab2829f04e629d->leave($__internal_98f2b7825a474675f432fff31193913fa4818698dcc434b8c4ab2829f04e629d_prof);

        
        $__internal_8a675a7bb67b49327309680ef5ec367c10615daf3b20f3fb4f13df2d4e0650af->leave($__internal_8a675a7bb67b49327309680ef5ec367c10615daf3b20f3fb4f13df2d4e0650af_prof);

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
