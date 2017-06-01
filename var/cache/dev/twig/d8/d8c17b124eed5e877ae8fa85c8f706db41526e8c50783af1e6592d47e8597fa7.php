<?php

/* ESFEspaceAbonneBundle:back:logementOne.html.twig */
class __TwigTemplate_933685bcdbbc827024c1c4f72ce1afb54d809b8c40c05288ecace8b455262add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:logementOne.html.twig", 1);
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
        $__internal_70db534ad3f6006fe19a01c32d5eca2edd06bc7089ab51ff2d6cf8cb8e2ec97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70db534ad3f6006fe19a01c32d5eca2edd06bc7089ab51ff2d6cf8cb8e2ec97a->enter($__internal_70db534ad3f6006fe19a01c32d5eca2edd06bc7089ab51ff2d6cf8cb8e2ec97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $__internal_cbf796fb81260090ac856c7dc11a07d3afd0b6fe409312fed4014d0cf4bb771d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf796fb81260090ac856c7dc11a07d3afd0b6fe409312fed4014d0cf4bb771d->enter($__internal_cbf796fb81260090ac856c7dc11a07d3afd0b6fe409312fed4014d0cf4bb771d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70db534ad3f6006fe19a01c32d5eca2edd06bc7089ab51ff2d6cf8cb8e2ec97a->leave($__internal_70db534ad3f6006fe19a01c32d5eca2edd06bc7089ab51ff2d6cf8cb8e2ec97a_prof);

        
        $__internal_cbf796fb81260090ac856c7dc11a07d3afd0b6fe409312fed4014d0cf4bb771d->leave($__internal_cbf796fb81260090ac856c7dc11a07d3afd0b6fe409312fed4014d0cf4bb771d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15bf33bd1c69a3ab495b7b40207d02a42d84adb2a76813d6397a045529f51975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bf33bd1c69a3ab495b7b40207d02a42d84adb2a76813d6397a045529f51975->enter($__internal_15bf33bd1c69a3ab495b7b40207d02a42d84adb2a76813d6397a045529f51975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c829ed643333e1a7975a2a2d6d0db501d1236c1787df90cef894fdab1bd868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c829ed643333e1a7975a2a2d6d0db501d1236c1787df90cef894fdab1bd868e->enter($__internal_7c829ed643333e1a7975a2a2d6d0db501d1236c1787df90cef894fdab1bd868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7c829ed643333e1a7975a2a2d6d0db501d1236c1787df90cef894fdab1bd868e->leave($__internal_7c829ed643333e1a7975a2a2d6d0db501d1236c1787df90cef894fdab1bd868e_prof);

        
        $__internal_15bf33bd1c69a3ab495b7b40207d02a42d84adb2a76813d6397a045529f51975->leave($__internal_15bf33bd1c69a3ab495b7b40207d02a42d84adb2a76813d6397a045529f51975_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2c8870b66667d256e803c21a408b3479c43a790b1c40e91058ba8fbf4dfd92fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8870b66667d256e803c21a408b3479c43a790b1c40e91058ba8fbf4dfd92fe->enter($__internal_2c8870b66667d256e803c21a408b3479c43a790b1c40e91058ba8fbf4dfd92fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9b1b7778ca87bd63a4eca3323cd36d4053112454aae103ef4be14e52825255f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1b7778ca87bd63a4eca3323cd36d4053112454aae103ef4be14e52825255f2->enter($__internal_9b1b7778ca87bd63a4eca3323cd36d4053112454aae103ef4be14e52825255f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_9b1b7778ca87bd63a4eca3323cd36d4053112454aae103ef4be14e52825255f2->leave($__internal_9b1b7778ca87bd63a4eca3323cd36d4053112454aae103ef4be14e52825255f2_prof);

        
        $__internal_2c8870b66667d256e803c21a408b3479c43a790b1c40e91058ba8fbf4dfd92fe->leave($__internal_2c8870b66667d256e803c21a408b3479c43a790b1c40e91058ba8fbf4dfd92fe_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f81f38d2cfd9c9826be48a9064bcb095bfeecbad726aaa65566f9deb13e0bf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81f38d2cfd9c9826be48a9064bcb095bfeecbad726aaa65566f9deb13e0bf3d->enter($__internal_f81f38d2cfd9c9826be48a9064bcb095bfeecbad726aaa65566f9deb13e0bf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d2bb4f37b818b2c80673f308c70c4488917b73a3e77ac596fca80b3c927e8283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bb4f37b818b2c80673f308c70c4488917b73a3e77ac596fca80b3c927e8283->enter($__internal_d2bb4f37b818b2c80673f308c70c4488917b73a3e77ac596fca80b3c927e8283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<div class=\"form-group\">

\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'label', array("label" => "Type de logement"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'widget');
        echo "

\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 45
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_d2bb4f37b818b2c80673f308c70c4488917b73a3e77ac596fca80b3c927e8283->leave($__internal_d2bb4f37b818b2c80673f308c70c4488917b73a3e77ac596fca80b3c927e8283_prof);

        
        $__internal_f81f38d2cfd9c9826be48a9064bcb095bfeecbad726aaa65566f9deb13e0bf3d->leave($__internal_f81f38d2cfd9c9826be48a9064bcb095bfeecbad726aaa65566f9deb13e0bf3d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:logementOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 47,  165 => 45,  158 => 40,  154 => 39,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\tInscription logement - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block Content %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t{{ form_start(form) }}
\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"form-group\">

\t\t\t\t{{ form_label(form.typeLogement, 'Type de logement') }}
\t\t\t\t{{ form_errors(form.typeLogement) }}
\t\t\t\t{{ form_widget(form.typeLogement) }}

\t\t\t\t{{ form_label(form.nometablissement, 'Université') }}
\t\t\t\t{{ form_errors(form.nometablissement) }}
\t\t\t\t{{ form_widget(form.nometablissement) }}

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.reinitialiser) }}
\t\t\t\t\t\t{{ form_widget(form.rechercher) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}", "ESFEspaceAbonneBundle:back:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/logementOne.html.twig");
    }
}
