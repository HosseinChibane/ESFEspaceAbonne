<?php

/* ESFEspaceAbonneBundle:Back:mesdocuments.html.twig */
class __TwigTemplate_cdb7837c160af7985d330c56d275072d3b3f068a19f42769ee0b557db482601b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig", 1);
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
        $__internal_bee770067946f51bc12a0bf48c0b26b7d208e4f4c2db78ed391ea9e23fa0c6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee770067946f51bc12a0bf48c0b26b7d208e4f4c2db78ed391ea9e23fa0c6d3->enter($__internal_bee770067946f51bc12a0bf48c0b26b7d208e4f4c2db78ed391ea9e23fa0c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig"));

        $__internal_f2c338d828c30366cc27e23249aa9a27c574bb1afef325d7b10fd9c5ae2fc357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c338d828c30366cc27e23249aa9a27c574bb1afef325d7b10fd9c5ae2fc357->enter($__internal_f2c338d828c30366cc27e23249aa9a27c574bb1afef325d7b10fd9c5ae2fc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee770067946f51bc12a0bf48c0b26b7d208e4f4c2db78ed391ea9e23fa0c6d3->leave($__internal_bee770067946f51bc12a0bf48c0b26b7d208e4f4c2db78ed391ea9e23fa0c6d3_prof);

        
        $__internal_f2c338d828c30366cc27e23249aa9a27c574bb1afef325d7b10fd9c5ae2fc357->leave($__internal_f2c338d828c30366cc27e23249aa9a27c574bb1afef325d7b10fd9c5ae2fc357_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23d529e2e88c23aa25c420682492cf4f70ed48e8f3a2bba5e3729c9e51bbff90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d529e2e88c23aa25c420682492cf4f70ed48e8f3a2bba5e3729c9e51bbff90->enter($__internal_23d529e2e88c23aa25c420682492cf4f70ed48e8f3a2bba5e3729c9e51bbff90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eeb9a4e0a72739048d7d590fef38cf9f6aa7d73655e41daad9758167a9d8415c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb9a4e0a72739048d7d590fef38cf9f6aa7d73655e41daad9758167a9d8415c->enter($__internal_eeb9a4e0a72739048d7d590fef38cf9f6aa7d73655e41daad9758167a9d8415c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eeb9a4e0a72739048d7d590fef38cf9f6aa7d73655e41daad9758167a9d8415c->leave($__internal_eeb9a4e0a72739048d7d590fef38cf9f6aa7d73655e41daad9758167a9d8415c_prof);

        
        $__internal_23d529e2e88c23aa25c420682492cf4f70ed48e8f3a2bba5e3729c9e51bbff90->leave($__internal_23d529e2e88c23aa25c420682492cf4f70ed48e8f3a2bba5e3729c9e51bbff90_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_83e599026c0a5f16ac1723d49a364ca542782e12fc5e004a080ec13531ff4913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e599026c0a5f16ac1723d49a364ca542782e12fc5e004a080ec13531ff4913->enter($__internal_83e599026c0a5f16ac1723d49a364ca542782e12fc5e004a080ec13531ff4913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_61a6aba9ee76b928d778182d8a12f81fcd470f255748ae4e90c66177f3bdb9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a6aba9ee76b928d778182d8a12f81fcd470f255748ae4e90c66177f3bdb9a0->enter($__internal_61a6aba9ee76b928d778182d8a12f81fcd470f255748ae4e90c66177f3bdb9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_61a6aba9ee76b928d778182d8a12f81fcd470f255748ae4e90c66177f3bdb9a0->leave($__internal_61a6aba9ee76b928d778182d8a12f81fcd470f255748ae4e90c66177f3bdb9a0_prof);

        
        $__internal_83e599026c0a5f16ac1723d49a364ca542782e12fc5e004a080ec13531ff4913->leave($__internal_83e599026c0a5f16ac1723d49a364ca542782e12fc5e004a080ec13531ff4913_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d038c04d6955827d68a62ccf40adafe0c3f9b1e05cd5636a0911c1371b614318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d038c04d6955827d68a62ccf40adafe0c3f9b1e05cd5636a0911c1371b614318->enter($__internal_d038c04d6955827d68a62ccf40adafe0c3f9b1e05cd5636a0911c1371b614318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0c3c8f99f284f7bdb4dea34452eeaff204eb98a765ab2fee4ffdce9885bd9e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3c8f99f284f7bdb4dea34452eeaff204eb98a765ab2fee4ffdce9885bd9e45->enter($__internal_0c3c8f99f284f7bdb4dea34452eeaff204eb98a765ab2fee4ffdce9885bd9e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "    <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
     <strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
 </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<!-- Mes Documents -->
";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 26
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "vars", array()), "valid", array())) {
            // line 27
            echo "    <div class=\"alert alert-error\">
        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
";
        }
        // line 31
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">

        <div class=\"alert alert-info\">
            <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
        </div>         
    </div>

    <div class=\"col-md-6\">             
        <div class=\"form-group\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "documents", array()), 'row');
        echo "
            ";
        // line 58
        echo "        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            ";
        // line 73
        echo "        </div>
    </div>

    ";
        // line 77
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                ";
        // line 83
        echo "            </div>
        </div>
    </div>
    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

</div>
</div>
";
        
        $__internal_0c3c8f99f284f7bdb4dea34452eeaff204eb98a765ab2fee4ffdce9885bd9e45->leave($__internal_0c3c8f99f284f7bdb4dea34452eeaff204eb98a765ab2fee4ffdce9885bd9e45_prof);

        
        $__internal_d038c04d6955827d68a62ccf40adafe0c3f9b1e05cd5636a0911c1371b614318->leave($__internal_d038c04d6955827d68a62ccf40adafe0c3f9b1e05cd5636a0911c1371b614318_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 86,  176 => 83,  167 => 77,  162 => 73,  156 => 58,  152 => 42,  139 => 31,  133 => 28,  130 => 27,  128 => 26,  123 => 24,  119 => 22,  110 => 19,  106 => 17,  102 => 16,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mes Documents - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
{% endblock %}

{% block Content %} 

   {% for flash_message in app.session.flashBag.get('notice') %}
    <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
     <strong> {{ flash_message }} </strong> 
 </div>
{% endfor %}

<!-- Mes Documents -->
{{ form_start(form) }}

{% if not form.physique.vars.valid %}
    <div class=\"alert alert-error\">
        {{ form_errors(form) }}
    </div>
{% endif %}

<div class=\"row\">
    <div class=\"col-md-12\">

        <div class=\"alert alert-info\">
            <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
        </div>         
    </div>

    <div class=\"col-md-6\">             
        <div class=\"form-group\">
            {{ form_row(form.physique.documents) }}
            {#{{ form_label(form.physique.documents.PasseportName, 'Passeport') }}
            {{ form_widget(form.physique.documents.PasseportName) }}
            {{ form_widget(form.physique.documents.PasseportFile) }}

            {{ form_label(form.physique.documents.CarteIdentiteName, 'Carte Identite') }}
            {{ form_widget(form.physique.documents.CarteIdentiteName) }}
            {{ form_widget(form.physique.documents.CarteIdentiteFile) }}

            {{ form_label(form.physique.documents.BacName, 'Baccalaureat') }}
            {{ form_widget(form.physique.documents.BacName) }}
            {{ form_widget(form.physique.documents.BacFile) }}

            {{ form_label(form.physique.documents.CredentialName, 'Crédential / Autre équivalence') }}
            {{ form_widget(form.physique.documents.CredentialName) }}
            {{ form_widget(form.physique.documents.CredentialFile) }}#}
        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            {#{{ form_label(form.physique.documents.BulletinNoteName, 'Bulletin de Note') }}
            {{ form_widget(form.physique.documents.BulletinNoteName) }}                
            {{ form_widget(form.physique.documents.BulletinNoteFile) }}

            {{ form_label(form.physique.documents.LettreRecommendationName, 'Lettres de Recommendation') }}
            {{ form_widget(form.physique.documents.LettreRecommendationName) }}
            {{ form_widget(form.physique.documents.LettreRecommendationFile) }} 

            {{ form_label(form.physique.documents.LettreMotivationName, 'Lettre de Motivation') }}
            {{ form_widget(form.physique.documents.LettreMotivationName) }}
            {{ form_widget(form.physique.documents.LettreMotivationFile) }}  #}
        </div>
    </div>

    {# Token CSRF #}
    {{ form_widget(form._token) }}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                {#{{ form_widget(form.physique.documents.upload) }}#}
            </div>
        </div>
    </div>
    {{ form_end(form, {'render_rest': false} ) }}

</div>
</div>
{% endblock %}

{# Bootstrap FileInput
    <input id=\"input-id\" type=\"file\" class=\"file\" data-preview-file-type=\"text\" >
, { 'attr': {'id': 'input-id', 'class': 'file', 'multiple': 'true', 'data-show-upload': 'false', 'data-show-caption': 'true', 'showUpload':false, 'previewFileType':'any'} }#}", "ESFEspaceAbonneBundle:Back:mesdocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mesdocuments.html.twig");
    }
}
